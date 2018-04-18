#!/bin/sh
sudo su -l
cd /projects
service mysql restart
mysql -uroot  < /projects/gnet/config/init_mysql.sql

cp /projects/gnet/config/000-default.conf /etc/apache2/sites-available/

cd /projects/gnet 
bin/console doctrine:migrations:migrate