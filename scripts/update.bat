cd C:\xampp\htdocs\hotel
git checkout .
git pull origin master
composer install
php artisan migrate
php artisan route:clear
php artisan view:clear
php artisan config:cache
cd C:\xampp\htdocs\hotel\public
bower install