# PHP-Laravel-demo
![alt text](https://upload.wikimedia.org/wikipedia/commons/3/3d/LaravelLogo.png)

### What is this good for?
Laravel is a framework that utilizes expressive, elegant syntex, with automation set up, making authentication and other functionalities easier and pain free.


### Installation:

First we will install Homestead, which will allow us to work with all the pre-requisites without installing all of them on our system. Instead, we create a virtual system that is preconfigured with everything we need for Laravel.

#### Homestead installation:

1. install VirtualBox 5.1, and Vagrant

2. run command: 
```
vagrant box add laravel/homestead 
```
choose 2, and wait.

3. Navigate to your home folder and run 
```
git clone https://github.com/laravel/homestead.git Homestead
```
4. enter the HomeStead folder and run 
```
git checkout v6.2.2
```
This is the latest stable version of Homestead

5. run:
```
bash init.sh
```
This creates the configuration file Homestead.haml

6. next, edit your hosts file and add: 
```
192.168.10.10  homestead.app
```	
7. You’re ready to Launch!
```
vagrant up 
```
(Or vagrant destroy –force to stop)

8. update PHP by typing:
```
curl -s https://php-osx.liip.ch/install.sh | bash -s 7.2
```

9. You'll need to make sure the new PHP becomes is globally available to the command line. In order to do so, you'll need to add the installation's address to the list of folders it checks for. In order to do so, run open ~/.bash_profile.
Add the following lines to the file:
```
PATH="/usr/local/php5/bin:$PATH"
PATH="$HOME/.composer/vendor/bin:$PATH"
```
You an figure out where in the file for yourself!

10. install composer by typing the list of commands from here:
https://getcomposer.org/download/

11. install Laravel by typing composer global require "laravel/installer"
This adds laravel to the composer folder, which we added to our bash_profile file. 

Now you can run Laravel as a command from anywhere!
To create a new project, type Laravel new Name_for_Project
### Using the server
At this point, you can continue and develop the server. The basic routing functionality will be set in the routes/web.php on the project's root folder. You can setup controllers by typing: (replace "some")
```
php artisan make:controller someController
```
models by typing:
```
php artisan make:model some --migration
```
these are automatic commands based on which Laravel will set up your project with the files and folder structure you need.



#### Notice:
some changes have been made with Laravel's folder structure since the writing of the mentioned tutorial.
You will find that there's no routes file, so as advised here, the file to edit will be web.php. For any other such issues, please look online, particularly in stackoverflow, solutions will be found.


## Assignment:
Make a list of knock knock jokes to be randomly presented to the user.

### Resources:
[Installation Guide](https://laravel.com/docs/5.5/)  

[Quick Setup Guide](https://laravel.com/docs/4.2/quick)  

[Routing with Laravel](https://laravel.com/docs/5.3/routing#basic-routing)

[Tutorial](https://selftaughtcoders.com/from-idea-to-launch/lesson-17/laravel-5-mvc-application-in-10-minutes) (see *notice*)

[DB Configuration](https://laravel.com/docs/5.5/database#configuration)

