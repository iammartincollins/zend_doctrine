echo "composer update"
php composer.phar update
echo "creating database"
mysql -u root -pDBP@ss -h localhost -Bse "CREATE DATABASE orm_task;"
echo "writing to db"
mysql -u root -pDBP@ss -h localhost orm_task < /var/www/vagrant/manifests/dbdump.sql