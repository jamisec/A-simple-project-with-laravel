     DOCUMENTATION



Installation


Server Requirements
The Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the https://laravel.com/docs/5.7/homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.

However, if you are not using Homestead, you will need to make sure your server meets the following requirements:

PHP >= 7.1.3
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
XML PHP Extension
Ctype PHP Extension


Installing Laravel
Laravel utilizes Composer(https://getcomposer.org/doc/00-intro.md) to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.

Via Laravel Installer
First, download the Laravel installer using Composer:

(composer global require "laravel/installer")
Once installed, the laravel new command will create a fresh Laravel installation in the directory you specify. For instance, laravel new blog will create a directory named blog containing a fresh Laravel installation with all of Laravel's dependencies already installed:

laravel new blog



Local Development Server
If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve Artisan command. This command will start a development server at http://localhost:8000:

php artisan serve

Web Server Configuration

Pretty URLs
Apache
Laravel includes a public/.htaccess file that is used to provide URLs without the index.php front controller in the path. Before serving Laravel with Apache, be sure to enable the  mod_rewrite module so the .htaccess file will be honored by the server.

If the .htaccess file that ships with Laravel does not work with your Apache installation, try this alternative:

Options +FollowSymLinks -Indexes
RewriteEngine On

RewriteCond %{HTTP:Authorization} .
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]
Nginx
If you are using Nginx, the following directive in your site configuration will direct all requests to the index.php front controller:

location / {
    try_files $uri $uri/ /index.php?$query_string;
}
Of course, when using Homestead or Valet, pretty URLs will be automatically configured.

You may also want to configure a few additional components of Laravel, such as:

Cache
Database
Session

First you have to copy the project and paste it into xammp-> htdocs folder


secondly, you have to create a new database.For this you have to go to (phpmyadmin) and create a database then you have to go .env file and change database name by which you given in phpmyadmin.

thirdly, you write a command to autoload the project:
composer dump autoload

fourth,again go to the database and give some demo data input to ensure that project correctly works in your machine.

fifth, you have to migrate all the elements of the project for this you write the below command:
php artisan migrate 
After migrating write:
php artisan serve     


then this project will be ready to run.
