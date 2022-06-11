# k均值聚类

数据输入：
测试数据为一个N * m的矩阵，代表N个样本点，每个点的维度为m。
常数k，代表将上述样本点聚成k类。

数据输出：
一个 N * 1 的一维向量，代表进行聚类之后各个点所属的类id。

要求：
代码可执行、正确、清晰
不得参考任何现成代码，否则自动fail

样例函数：
def clustering(data, k):
      N, m = data.shape
      ...
      return data_cluster

算法流程为（使用欧几里得距离）：
1、令S为质心集合，初始化为空集
2、从数据集中随机选取一个样本点，加入S成为第一个质心
3、for i = 2 to k：
     a. 对于不在S中的每个样本，计算其与当前S中所有质心的距离的最大值D
     b. 选取D值最大的点，加入S成为第i个质心
   （此时S中包含k个质心）
4、对每个样本点：
    a. 计算其与S中各个质心的距离
    b. 将样本点分配至最近质心所属的类
5、对某个类：
    a. 将质心设置为该类所有样本点的均值
    b. 在S中更新对应的类的质心
如果S中有质心发生改变，则重复上述过程（4-5）

```python
def dis(p,q):
    ans=0
    for i in range(len(p)):
        ans+=(p[i]-q[i])*(p[i]-q[i])
    return ans

def full_dis(row,pivots):
    ans=0
    for p in pivots:
        ans+dis(row,p)
    return ans

def init(data,k,pivots,data_cluster):
    N, m = data.shape
    for i in range(1,k):
        max_dis=0
        p2=0
        for j in range(N):
            if data_cluster[j] >=0:
                continue
            fd=full_dis(data[j],pivots)
            if fd>max_dis:
                max_dis=fd
                p2=j

        pivots.append(data[p2].copy())
        data_cluster[p2]=len(pivots)-1

def label(data,pivots,data_cluster,N,counter,accu,neighbor,k):
    for i in range(k):
        counter[i]=0
        accu[i]=0

    moved=0
    for i in range(N):
        if data_cluster[i]<0:
            data_cluster[i]=i%k

        idx=data_cluster[i]
        d=dis(data[i],pivots[idx])

        for j in range(k):
            if d<neighbor[j]: 
                continue
            d_tmp=dis(data[i],pivots[idx])
            if d_tmp>d:
                d=d_tmp
                idx=j
                moved+=1

        data_cluster[i]=idx
        counter[idx]+=1
        accu[idx]+=data[i]

    return moved

def smooth(pivots,k,counter,accu,neighbor):
    for i in range(k):
        pivots[i]=accu[i]/counter[i]

    for i in range(k):
        dis=neighbor[i]
        for j in range(i+1,k):
            d=dis(pivots[i],pivots[j])/2  # 2*dis(row,pi)<neighor[pi]
            if d<dis:
                neighbor[i]=d
                neighbor[j]=d

    return neighbor

def clustering(data, k):
    N, m = data.shape
    pivots=[data[0].copy()]
    data_cluster=[-1]*N  # not allocated
    data_cluster[0]=0
    init(data,k,pivots,data_cluster)

    counter=[0]*k
    accu=[0]*k
    neighbor=[float('inf')]*k # triangle accelerate, nearest pivot neighbor distance
    moved=N

    while moved>0:
        moved= label(data,pivots,data_cluster,N,counter,accu,neighbor)
        smooth(pivots,k,counter,accu,neighbor)

    return data_cluster
```
需要用到三角不等式，d(a,b)+d(b,c)≥d(a,c),d(a,b)−d(b,c)≤d(a,c)
对于每一个Ci,用一个hash表存放与它最近的距离d(Ci,Cj)。
则x与它目前所在簇的质心的距离为d(Ci,x)，与d(Ci,Cj)比较。
如果2d(Ci,x)≤d(Ci,Cj),则说明不需要更换x的归属。