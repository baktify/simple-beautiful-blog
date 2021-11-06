## About Simple awesome blog

This awesome blog website is dedicated to create a simple posts with tags and category and functionality to write
comments. Backend is written in [Laravel version 8.0](https://laravel.com/docs/8.x) and supports php version above 7.4.

Website design and layout was created from scratch by myself using [TailwindCSS](https://tailwindcss.com). Project has a
login mechanism which is performed by Laravel Breeze. There is an admin panel to manage with posts, tags, categories,
comments which is available only for admins.

After installing project to your machine you may not see any data in website. For better testing experience I created
factories and seeders. To create posts, categories, tags just run command "php artisan migrate:fresh --seed" and your
website will be filled with beautiful datas. Now, you can login in using email - "admin@admin.com" and password - "
password" to get access to admin panel. After loggin in open directory /admin and you are in admin panel.

The website structuring wasn't created according to "modern architecture patterns". For the small project like this, I
thought it is not necessary. See also my other projects, maybe there you can see some project patterns.
