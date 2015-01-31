#!/bin/bash

# Work with servies http://habrahabr.ru/company/infobox/blog/241237/

echo "NAME: Configure prog.cn.ua application"

echo "-> PREPARE"
    # Check if SWAP is configured


    if [ -d "/swapfile" ]; then
        dd if=/dev/zero of=/swapfile bs=1024 count=1024k
        mkswap /swapfile
        swapon /swapfile
        chown root:root /swapfile
        chmod 0600 /swapfile
    fi

echo "-> START"
    cd /vagrant
    cp vagrant/tasks/prog.cn.ua/httpd/vhosts.conf /etc/httpd/conf.d/vhosts.conf
    cp -r vagrant/tasks/prog.cn.ua/httpd/vhosts.d /etc/httpd/

    mysql -uroot -e'DROP DATABASE prog_cn_ua; CREATE DATABASE IF NOT EXISTS prog_cn_ua'
    systemctl restart httpd

    cd /var/www/html/wp
    #todo fix permissions
    mkdir -p wp-content/uploads
    chmod -R 777 wp-content/uploads
    sudo -u apache wp core install --url="http://prog.cn.ua" --title="ProgCnUa" --admin_user=admin --admin_password=qwer1234 --admin_email=admin@prog.cn.ua

echo "-> FINISH"

