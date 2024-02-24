composer install
cp .env.example .env
php artisan key:generate
# php CopyBuild.php
# chmod +x ./permission.sh
php artisan serve


# Path: permission.sh
# php artisan permission:create-permission-routes