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

Form
1- when you create you first form after login 
2- you will go to form page to show your created form
3- there is a url that will show the url with out authorize for client side
![screencapture-localhost-8000-login-2023-06-10-20_24_15](https://github.com/fatmasamir272/chanlage-form-builder/assets/61781331/9d3205fe-49f6-4502-b690-9167a1a9a836)
![screencapture-localhost-8000-form-3-2023-06-10-18_25_01](https://github.com/fatmasamir272/chanlage-form-builder/assets/61781331/c7a97a72-74f4-4536-925f-52ba8e8e0eff)
![screencapture-localhost-8000-admin-forms-2023-06-10-18_21_47](https://github.com/fatmasamir272/chanlage-form-builder/assets/61781331/eb98dc3d-7097-4329-b707-318d7dac777f)
![screencapture-localhost-8000-admin-dashboard-2023-06-10-18_20_33](https://github.com/fatmasamir272/chanlage-form-builder/assets/61781331/0e18d1d2-1034-4ead-ae72-6276b6b10107)

