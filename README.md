# INSPIRED TECH LIFE #



##About

Dreamed up during the Digital Ocean hackathon, Inspired Tech life is a community for developers, designers, data scientists, and beyond. ITF's purpose is to help those in the tech world find help and support through groups, videos, mantras, and find support resources.

## Why Inspired Tech Life
While working as an instructional associate General Assembly, I found myself helping to inspire other students (designers, developers, and data scientists) that went beyond just the technical aspect. I feel there is a need for inspirational creative, and encouragement during life, especially when imposter syndrome, depression, doubt, and lack of focus can run amuck in this climate. 

*--Paula Bannerman*



## Language & Framework

- PHP

- Laravel 8 

- Tailwind CSS

- FontAwesome

- PSQL

- Node JS

  

## Deployment

Digital Ocean Platform



- For Installation fork and clone this repo
- Use `Composer Install` to install 
- Create an `.env` file on the root of the project
- Add this line of code inside the `.env` file 

```
APP_KEY=
```

- In the terminal use  `php artisan key:generate` to create a key for the laravel project
- Use the `.env.example` to build your `.env` file to connect to the database you desire.
- Use `php artisan migration` to build the tables in the database



To allow css, images, and javascript to function on localhost the following lines in **AppServiceProvider.php** located in the **providers folder** inside the **app folder** must be commented out

```php
if(config('app.env') === 'production') {
\URL::forceScheme('https');
}
```



