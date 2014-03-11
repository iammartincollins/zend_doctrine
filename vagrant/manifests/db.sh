echo "composer update"
cd /var/www/
curl -sS https://getcomposer.org/installer | php
php composer.phar install
echo "creating database"
mysql -u root -pDBP@ss -h localhost -Bse "CREATE DATABASE orm_task;"
echo "writing to db"
mysql -u root -pDBP@ss -h localhost orm_task < /var/www/vagrant/manifests/dbdump.sql