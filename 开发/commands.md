# linux

## keyshort
  1. 在终端下：
     复制命令：Ctrl + Shift + C  组合键.
     粘贴命令：Ctrl + Shift + V  组合键.
  2. 在控制台下：
     复制命令：Ctrl + Insert  组合键　　或　　用鼠标选中即是复制。
     粘贴命令：Shift + Insert  组合键　　或　　单击鼠标滚轮即为粘贴。

## command
 cd cp grep cat awk rm chmod  free top cmake bash systemctl    
  ip  mount scp get wget rsync curl     
 tar -czvf test.tar.gz a.c && tar -xzvf test.tar.gz     
 zip -r mydata.zip mydata  && unzip name.zip -d name    
find * -name "*" | xargs dos2unix    

ssh systemctl journal 
sleep infinity 
cp sources.list /etc/apt/sources.list
swapoff -a

/etc/docker/daemon.json    
sudo docker run -it --rm  -v ~:/tmp ubuntu:latest /bin/bash    
 docker-compsoe up --build && exec serveice1 sh    
 java
 git clone add commit push checkout branch switch
 pip config set global.index-url https://pypi.tuna.tsinghua.edu.cn/simple
 
 ## function
 
 def exec(cmd):
    with os.popen(f"sudo {cmd}") as p:
        doc= p.readlines()
    doc=[x.strip() for x in doc]
    logger.info(f"执行{cmd} --> {doc}  ")
    return doc

   
## wifi
https://linuxconfig.org/ubuntu-20-04-connect-to-wifi-from-command-line    
frp

