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

## setup
grub界面长按shirft进入grub菜单
sudo nano /etc/default/grub
GRUB_CMDLINE_LINUX_DEFAULT="i8042.reset quiet splash"
sudo update-grub

nano /etc/environment   
nano /etc/systemd/logind.conf
#HandleLidSwitch合上笔记本盖后的行为，默认suspend（改为lock；即合盖不休眠）
运行：systemctl restart systemd-logind 就会生效。

apt-get install openssh-server
/etc/ssh/sshd.conf
PermitRootLogin without-password 修改为 PermitRootLogin yes
sudo passwd root
ssh-keygenu生成公钥私钥于{userhome}/.ssh/config
sudo systemctl restart sshd

拖动程序文件，或者复制路径至终端执行
apt-get install gcc
./configure  config
make 
make install

## tool
docker sleep infinity 
conda
pip
java
git clone add commit push checkout branch switch
 
