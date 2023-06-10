# chanlage-form-builder
Set up :
Clone the repo and cd into it

In your terminal composer install

Rename or copy .env.example file to .env - copy .env.example .env

php artisan key:generate

Set your database credentials in your .env file

migrate database by php artisan migrtae --seed

php artisan storage:link

Edit .env file and update FRONT_URL that will show forms from front side

php artisan serve or use virtual host

Visit localhost:8000 in your browser

Visit /admin/dashboard if you want to access the admin panel. Admin Email/Password: admin@gmail.com/12345.
