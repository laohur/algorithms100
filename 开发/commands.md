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
i8042.reset i8042.nomux i8042.nopnp i8042.noloo 
i8042.nomux=1 i8042.reset nomodeset
sudo update-grub

nano /etc/environment   
nano /etc/systemd/logind.conf
HandleLidSwitch=lock
运行：systemctl restart systemd-logind 就会生效。

终端输入命令sudo visudo，打开 visudo；找到 %sudo ALL=(ALL:ALL) ALL 这一行修改为%sudo ALL=(ALL:ALL) NOPASSWD:ALL 
apt-get install openssh-server
/etc/ssh/sshd.conf
PermitRootLogin without-password 修改为 PermitRootLogin yes
sudo passwd root
ssh-keygenu生成公钥私钥于{userhome}/.ssh/config
sudo systemctl restart sshd

How to to run sudo command without a password:

    Backup your /etc/sudoers file by typing the following command:
    sudo cp /etc/sudoers /root/sudoers.bak
    Edit the /etc/sudoers file by typing the visudo command:
    sudo visudo
    Append/edit the line as follows in the /etc/sudoers file for user named ‘vivek’ to run ‘/bin/kill’ and ‘systemctl’ commands:
    vivek ALL = NOPASSWD: /bin/systemctl restart httpd.service, /bin/kill
    Save and exit the file.


## tool
### docker sleep infinity 
sudo docker run -it --rm -u root -v /home/local:/workspace image1 /bin/bash
docker-compsoe up --build && exec serveice1 sh

## conda install remove
pip install uninstall
java
git clone add commit push checkout branch switch
 
 ## mirror
 pip install -i http://pypi.douban.com/simple/ pip -U && pip config set global.index-url http://pypi.douban.com/simple/ && pip config set global.trusted-host  pypi.douban.com
https://mirrors.tuna.tsinghua.edu.cn/help/ubuntu/
