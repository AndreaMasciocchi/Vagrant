#!/bin/bash
#ROOTPASSWD=root
DBNAME=vagrant
DBUSER=vagrant
DBPASSWD=vagrantpass
echo "Creating new db $DBNAME"
sudo mysql -uroot -e "CREATE DATABASE $DBNAME"
sudo mysql -uroot -e "CREATE USER '$DBUSER'@'%'"
sudo mysql -uroot -e "grant all privileges on $DBNAME.* to '$DBUSER'@'%'"
sudo mysql -uroot -e "FLUSH PRIVILEGES"
