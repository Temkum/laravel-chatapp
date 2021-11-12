# Postie

First off is we start to build the scaffold of our app

-   create route and view files
-   then pull in tailwind `npm i tailwindcss` then run `npm install`
-   then run `npm run dev`

-   pull in tailwind and modify the webpack.mix file
-   go to resources/css/app.css and modify
-   now run npm dev

-   nxt modify the base template file and pull in tailwind

## authentication

-   go to db folder/migrations
-   validation
-   store user
-   sign in user
-   redirect

-   login and logout
-   apply middleware to the route
-   remember me feature

-   Post feature create controller
-   add view file
-   add post model & migration

-   output posts

-   factory = run `php artisan tinker`
-   then `App\Models\model::factory->times(number)->create(['user_id'=>2]);`
-   modify the factory file you want to generate data

## Like and unlike

-   make like and unlike buttons
-   make migration table `php artisan make:migration create_likes_table --create=likes` -> modify likes table and migrate
-   make a model
-   create a controller and modify routes
