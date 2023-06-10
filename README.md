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

![screencapture-localhost-8000-admin-forms-2023-06-10-18_21_47](https://github.com/fatmasamir272/chanlage-form-builder/assets/61781331/a8526b0f-ceb4-42c1-835c-f49f2c39987b)
![screencapture-localhost-8000-admin-dashboard-2023-06-10-18_20_33](https://github.com/fatmasamir272/chanlage-form-builder/assets/61781331/aed3ac1e-3eac-46b0-9156-c21132a3c135)
<img width="941" alt="1" src="https://github.com/fatmasamir272/chanlage-form-builder/assets/61781331/c37a86b9-aacb-410d-8e87-993301ae27ad">
![screencapture-localhost-8000-form-3-2023-06-10-18_25_01](https://github.com/fatmasamir272/chanlage-form-builder/assets/61781331/ccb1927e-3339-4b7a-88d1-34ba958313ef)
