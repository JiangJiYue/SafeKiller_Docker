#!/bin/bash

# 启动PHP-FPM
php-fpm5.6

rm -rf /usr/local/openresty/nginx/html/index.html
# 启动 OpenResty
nginx

# 启动 Tomcat
/usr/local/apache-tomcat-8.5.19/bin/catalina.sh run

