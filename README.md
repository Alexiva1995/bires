# Bires [Status badge](https://img.shields.io/badge/status-complete-green)

<p align="center"><a href="#" target="_blank"><img src="#" ></a></p>
✨ Multilevel Platform, Oriented to the payment of investments and return of capital in marketing networks, integration with conpaymets for payments



## 🚀 Installation
1. Clone this project.
2. Go to the project folder `cd bires`.
3. Create the `.env` file from the `.env.example` file found in the root of the project (you must put your credentials to connect to your local database manager).
4. Display the command line and run the command `composer install` to install the necessary packages.
5. Display the command line and run the command `php artisan migrate` to install the necessary db and run `php artisan migrate:refresh --seed`.
6. Display the command line and run the command `php artisan key:generate`.
7. In the `.env` file you must make some additional configurations. First you must configure the `BROADCAST DRIVER` option with the value `pusher`.  Then you must configure the credentials of the payment processors that are used in the system `(Coinpayments)`.
8. Turn on the server for the locale enviroment with `php artisan serve` command

## 🛠 Deployment
1. Once the installation and necessary configurations are finished, you can upload the folder of the complete project to a remote server

## 🧾 License
Bynary target All Rigth Reserved ©

## ✨ Programming languages and framework
* PHP 8.0.3
* Laravel Versión  8.52.0
* MySQL
* JavaScript
* Jquery
* HTML5
* AJAX