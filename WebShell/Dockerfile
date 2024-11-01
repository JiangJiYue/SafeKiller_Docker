# 使用 Ubuntu 作为基础镜像
FROM ubuntu:20.04

# 更新系统并安装必要的软件包
RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y \
    wget gnupg software-properties-common build-essential \
    libpcre3 libpcre3-dev zlib1g zlib1g-dev libssl-dev openjdk-8-jdk && \
    rm -rf /var/lib/apt/lists/*

# 添加 PHP 5.6 的 PPA 并安装
RUN add-apt-repository ppa:ondrej/php && \
    apt-get update && \
    apt-get install -y php5.6 php5.6-fpm && \
    rm -rf /var/lib/apt/lists/*

# 安装 OpenResty
RUN wget https://openresty.org/download/openresty-1.21.4.1.tar.gz -P /tmp && \
    tar xf /tmp/openresty-1.21.4.1.tar.gz -C /tmp && \
    cd /tmp/openresty-1.21.4.1/ && \
    ./configure --prefix=/usr/local/openresty --sbin-path=/usr/sbin/nginx --conf-path=/usr/local/openresty/nginx.conf --pid-path=/var/run/nginx.pid --error-log-path=/var/log/nginx/error.log --http-log-path=/var/log/nginx/access.log --lock-path=/var/lock/nginx.lock && \
    make && make install && \
    mkdir -p /var/tmp/nginx/client_body && \
    mkdir -p /usr/local/openresty/nginx/logs/ && \
    rm -rf /tmp/openresty-1.21.4.1*

# 安装 Tomcat
RUN wget https://archive.apache.org/dist/tomcat/tomcat-8/v8.5.19/bin/apache-tomcat-8.5.19.tar.gz -P /tmp && \
    tar xf /tmp/apache-tomcat-8.5.19.tar.gz -C /usr/local/ && \
    rm -rf /tmp/apache-tomcat-*

RUN mkdir -p /run/php
RUN chown -R www-data:www-data /run/php

# 设置环境变量
ENV JAVA_HOME=/usr/lib/jvm/java-8-openjdk-amd64
ENV PATH="$JAVA_HOME/bin:$PATH"
ENV PATH="/usr/local/openresty/nginx/sbin:/usr/local/tomcat/bin:${PATH}"

# 暴露必要的端口
EXPOSE 80 8080

COPY nginx/nginx.conf /usr/local/openresty
COPY nginx/php/       /usr/local/openresty/nginx/html
COPY tomcat/          /usr/local/apache-tomcat-8.5.19/webapps/ROOT
# 复制启动脚本到容器中
COPY start.sh /start.sh
RUN chmod +x /start.sh

# 使用启动脚本
CMD ["/start.sh"]
