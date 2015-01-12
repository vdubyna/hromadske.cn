#!/bin/bash

# Work with servies http://habrahabr.ru/company/infobox/blog/241237/

echo "NAME: Configure prog.cn.ua application"

echo "-> PREPARE"
    # Check on exists
    file="/etc/httpd/conf.d/vhosts.conf"
    if [ -f "$file" ]; then
        echo "Host already configured"
        exit 0
    fi

echo "-> START"

    mysql -uroot -e'CREATE DATABASE IF NOT EXISTS prog_cn_ua'

    cd /var/www/html

    git clone https://github.com/vdubyna/prog.cn.ua.git .

    mysql -uroot prog_cn_ua < wp/prog_cn_ua.sql

    cp vagrant/tasks/prog.cn.ua/httpd/vhosts.conf /etc/httpd/conf.d/vhosts.conf
    cp -r vagrant/tasks/prog.cn.ua/httpd/vhosts.d /etc/httpd/

    systemctl restart httpd

    dd if=/dev/zero of=/swapfile bs=1024 count=1024k
    mkswap /swapfile
    swapon /swapfile
    chown root:root /swapfile
    chmod 0600 /swapfile

echo "-> FINISH"

