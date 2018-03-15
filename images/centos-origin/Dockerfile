FROM centos
#安装
RUN yum update -y \
#安装wget
&& yum install -y wget \
#更新阿里源
&& mv /etc/yum.repos.d/CentOS-Base.repo /etc/yum.repos.d/CentOS-Base.repo.backup \
&& wget -O /etc/yum.repos.d/CentOS-Base.repo http://mirrors.aliyun.com/repo/Centos-7.repo \
&& yum clean all \
&& yum makecache \
#安装基本依赖
&&  yum install -y pcre-devel openssl openssl-devel openssh-clients openssh-server gcc automake autoconf libtool make curl libcurl-devel expat-devel perl-ExtUtils-MakeMaker net-tools gpm-libs git vim \
#安装w3m
&& wget https://dl.fedoraproject.org/pub/epel/7/x86_64/Packages/e/epel-release-7-11.noarch.rpm \
&& wget http://dl.fedoraproject.org/pub/epel/7/x86_64/Packages/w/w3m-0.5.3-36.git20180125.el7.x86_64.rpm \
&& wget http://rpmfind.net/linux/epel/7/x86_64/Packages/p/perl-NKF-2.1.3-5.el7.x86_64.rpm \
&& wget https://rpmfind.net/linux/centos/7.4.1708/os/x86_64/Packages/gc-7.2d-7.el7.x86_64.rpm \
&& rpm -ivh gc-7.2d-7.el7.x86_64.rpm \
&& rpm -ivh perl-NKF-2.1.3-5.el7.x86_64.rpm \
&& rpm -ivh epel-release-7-11.noarch.rpm \
&& rpm -ihv w3m-0.5.3-36.git20180125.el7.x86_64.rpm \
&& rm -rf gc-7.2d-7.el7.x86_64.rpm perl-NKF-2.1.3-5.el7.x86_64.rpm epel-release-7-11.noarch.rpm w3m-0.5.3-36.git20180125.el7.x86_64.rpm \
#git-completion
&& wget https://raw.githubusercontent.com/git/git/master/contrib/completion/git-completion.bash -o /root/.git-completion.bash \
#ssh
&&  mkdir /root/.ssh \
&&  ssh-keygen -t rsa -f /etc/ssh/ssh_host_rsa_key
#复制外部的sshd_config文件
ADD sshd_config /etc/ssh/
ADD authorized_keys /root/.ssh/
ADD bash_profile /root/.bash_profile
ADD profile/ /root/profile/


EXPOSE 22

CMD [ "/usr/sbin/sshd","-D" ]
