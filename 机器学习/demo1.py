class FenwickTree(object):
    def lowbit(self,num):
        return num*-num
    def construct(self,arr):
        self.tree={idx:num for idx,num in enumerate(arr,start=1)}
        for idx,num in enumerate(arr,start=1):
            idx_next=idx+self.lowbit(idx)
            if idx_next<=len(self.tree):
                self.tree[idx_next]+=self.tree[idx]
        return self
    def get(self,idx):
        summ,idx=0,idx+1
        while idx>0:
            summ+=self.tree[idx]
            idx-=self.lowbit(idx)
    def add(self,idx,num):
        idx+=1
        while idx<len(self.tree):
            self.tree[idx]+=num
            idx+=self.lowbit(idx)

class NumArray(object):
    def __init__(self,nums:List[int]):
        self.tree=FenwickTree().construct(nums)
        self.arr=nums
    def update(self,i:int,val:int)->None:
        self.tree[i]+=(val-self.arr[i])
        self.arr[i]=val
    def sumRange(self,i:int,j:int)->int:
        return self.tree[i:j+1]    

        