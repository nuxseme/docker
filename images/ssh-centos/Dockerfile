FROM centos
#安装
RUN yum update -y \
&&  yum install -y openssh-server \
&&  mkdir /root/.ssh \
&&  ssh-keygen -t rsa -f /etc/ssh/ssh_host_rsa_key
#复制外部的sshd_config文件

ADD sshd_config /etc/ssh/
ADD authorized_keys /root/.ssh/

EXPOSE 22

CMD [ "/usr/sbin/sshd","-D" ]
