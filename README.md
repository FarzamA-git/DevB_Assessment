##Project Explanation

1-First of all I'm using version 8 of Laravel.
2-Then I used laravel breeze for user authentication and updated the RegisteredUserController and AuthenticatedSessionController accordingly.
3-Then I updated the blade files of the Breeze.
4-After that I used Laravel Spatie Roles and Permissions.
5-Wrote down the seeders for Users, Roles and Permissions.
6-Then I created models, migrations,blades and controller for courses.
7-In web.php file, I defined middlewares so that routes can accessed by specific roles.


## How to Run project
1-Clone the project.
2-Use 'composer install' command to install all dependencies.
3-Run 'php artisan migrate' to run all migrations.
4-Run the following commands to seed data in db.
    php artisan db:seed --class=RoleSeeder
    php artisan db:seed --class=PermissionSeeder
    php artisan db:seed --class=UserSeeder
5- Run 'php artisan serve'.
6-Then you can login using the creds you gave me on email or you can register new user.
7-After registration, it'll take you to login page. After logging in it'll take you to dashboard where you can click 'Courses'.
8-Users with role 'Student' can also see the courses and cannot perform other tasks. While rest of roles can perform all tasks.
