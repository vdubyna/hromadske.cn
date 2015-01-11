#!/bin/bash

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
    git clone https://github.com/vdubyna/prog.cn.ua.git

    composer install

    mysql -uroot prog_cn_ua < wp/prog_cn_ua.sql

    cp vagrant/tasks/prog.cn.ua/httpd/vhosts.conf /etc/httpd/conf.d/vhosts.conf
    cp -r vagrant/tasks/prog.cn.ua/httpd/vhosts.d /etc/httpd/

    service httpd restart

echo "-> FINISH"

