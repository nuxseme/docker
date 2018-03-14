#基于纯净版centos 可修改为centos+ssh 等镜像
FROM centos

#定义安装的版本
ENV REDIS_VERSION 4.0.1

#安装
RUN yum update -y \
&&  yum install -y wget gcc make \
&&  wget  -O redis.tar.gz https://github.com/antirez/redis/archive/4.0.1.tar.gz \
&&  tar -zxf redis.tar.gz \
&&  cd redis-$REDIS_VERSION \
&&  make MALLOC=libc \
&&  make install \
&&  cd / \
&&  rm -rf redis.tar.gz redis-$REDIS_VERSION

#复制外部的redis.conf文件

ADD redis.conf /etc/

EXPOSE 6379

CMD [ "redis-server","/etc/redis.conf" ]
