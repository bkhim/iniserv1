<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This Project

This task from Iniserv should be a simple AI program to
simulate a normal website setup.
To make the system work:

- Clone the repository to your development folder (xampp, wamp...)
- Open powershell/CMD inside the directory
- Run the following commands to setup and run the system
```
composer install
npm install && npm run dev
php artisan serve
```
- Copy ```.env.example``` to ```.env```
- Run ```php artisan key:generate``` to generate application key
- Create your database and set the parameters in the ```.env``` file
- Run ```php artisan migrate``` to migrate the database
- Run ```php artisan serve``` to run the application

### Download and Using PostMan 
Download PostMan  here:  **[PostMan](https://www.postman.com/downloads//)**

The postman application is used to check the api routes for different actions.

The application routes are as follows: Note that all routes start at the endpoint
```http:://localhost:8000/api```

| Action                 | Route                                  |
| ---------------------- | ---------------------------------------|
| list all posts         | GET    /posts                          |
| show post with ID      | GET    /posts/{postID}                 |
| create post            | POST   /posts (see more below)         |
| update post            | PUT    /posts/{postID}                 |
| delete post            | DELETE /posts/{}}postID}               |
| subscribe              | GET    /subscribe/{userID}/{websiteID} |


###To create a post, the following need to be passed:

| Variable Name    | Variable Type   | Description           |
| ---------------- | --------------- | -----------           | 
| *website_id*     | **int**         | The ID of the website parent of the post|
| *title*          | **string**      | The post title        |
| *content*        | **string**      | The post content      |
| *editor*         | **int**         | The ID of the post creator from _users_ table |

## Other technologies user
- [Maitrap.io](https://mailtrap.io/inboxes/1093904/messages) for local email sending
- Database cache
- Laravel queues to send email notifications on new post
- Laravel events to listen for new posts

#Thank you and enjoy the application.
