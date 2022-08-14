## About Simple awesome blog

This awesome blog website is dedicated to create a simple posts with tags and category and functionality to write
comments. Backend is written in [Laravel version 8.0](https://laravel.com/docs/8.x) and supports php version above 7.4.

Website design and layout was created from scratch by myself using [TailwindCSS](https://tailwindcss.com). Project has a
login mechanism which is performed by Laravel Breeze. There is an admin panel to manage with posts, tags, categories,
comments which is available only for admins.

After installing project to your machine you may not see any data in website. For better testing experience I created
factories and seeders. First, you should connect project to the database. To do so, write database name, username,
password in ".env" file.
After it, to create posts, categories, tags just run command that will migrate database and create data.

    cp .env.example .env
    php artisan key:generate
    php artisan migrate:fresh --seed 

and your website will be filled with beautiful datas. Now, you can login in using email and password

    email - "admin@admin.com"  
    password - "password" 

to get access to admin panel. After logging in open url "/admin" and you are in admin panel.

The website structuring wasn't created according to modern architecture patterns. For the small project like this, I
thought it is not necessary. See also my other projects, maybe there you can see some project patterns.
