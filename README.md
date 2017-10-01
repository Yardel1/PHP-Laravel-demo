# PHP-Laravel-demo
Installation:

First we will install Homestead, which will allow us to work with all the pre-requisites without installing all of them on our system. Instead, we create a virtual system that is preconfigured with everything we need for Laravel.

Homestead installation: 
1.install VirtualBox 5.1, and Vagrant
2.run command: 
vagrant box add laravel/homestead 
choose 2, and wait.
3.Navigate to your home folder and run 
git clone https://github.com/laravel/homestead.git Homestead
4.enter the HomeStead folder and run 
	git checkout v6.2.2
This is the latest stable version of Homestead
5.run 
	bash init.sh
This creates the configuration file Homestead.haml
6.next, edit your hosts file and add: 
	192.168.10.10  homestead.app
7.You’re ready to Launch!
Hit vagrant up 
(Or vagrant destroy –force to stop)
8.update PHP by typing:
curl -s https://php-osx.liip.ch/install.sh | bash -s 7.2
