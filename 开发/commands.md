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
 netstat ip addr mount scp get wget rsync curl     
 tar -czvf test.tar.gz a.c && tar -xzvf test.tar.gz     
 zip -r mydata.zip mydata  && unzip name.zip -d name    
find * -name "*" | xargs dos2unix    

## setup
 grub界面长按shirft进入grub菜单
 sudo nano /etc/default/grub
 GRUB_CMDLINE_LINUX_DEFAULT="i8042.nomux=1 i8042.reset  quiet splash"
 #i8042.reset i8042.nomux i8042.nopnp i8042.noloo 
 sudo update-grub

 nano /etc/systemd/logind.conf
 HandleLidSwitch=lock
 运行：systemctl restart systemd-logind 就会生效。


 apt-get install openssh-server
 ssh-keygenu生成公钥私钥于{userhome}/.ssh/config
 sudo systemctl restart sshd


## tool
### docker sleep infinity 
/etc/docker/daemon.json    
sudo docker run -it --rm  -v ~:/tmp ubuntu:latest /bin/bash    
 docker-compsoe up --build && exec serveice1 sh    

 java
 git clone add commit push checkout branch switch
 
## python
pip install virtualenv virtualenvwrapper     
virtualenv -p python3 py3     
source ~/py3/bin/activate   

https://www.cnblogs.com/freely/p/8022923.html
 https://mirrors.tuna.tsinghua.edu.cn/help/ubuntu/

pip install -i https://pypi.tuna.tsinghua.edu.cn/simple pip -U 
pip config set global.index-url https://pypi.tuna.tsinghua.edu.cn/simple

## 关闭swap    
  .# 查看是否有swap（返回空表示没有），也可以使用 top/free 查看    
  sudo swapon --show    
  .# 关掉 swap     
  sudo swapoff -v /swap.img     
  .# 修改 fstab ，取消启动挂载    
  vim /etc/fstab     
  .# 删除交换分区文件    
  rm -rf /swap.img    
  du -h -d 1 # 文件占用空间    
