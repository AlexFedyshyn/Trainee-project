
# Installation
___
* Download and install composer from https://getcomposer.org
* Download the archive or clone the project using git
* Create database
* In the root project directory create file ```.env```
* Copy all from ```.env.example``` in your file ```.env```
* Change in ```.env``` file ```DB_DSN { your hostname,dbname and port}``` also change ```DB_USER``` and ```DB_PASSWORD```
* In terminal run ```composer install``` from the project root directory
* In terminal run command  ```php migrations.php``` from the project root directory
* Go to the ```public``` folder
* Start php server by running command ```php -S localhost:8080```
* Open in browser http://localhost:8080
___

#Login in
___

Migration creat new base user `admin`

you can login in by:

Email: ```admin@example.com```
Password: ```12345```