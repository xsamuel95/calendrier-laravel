<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Getting started

## Installation

Veuillez consulter le guide d'installation officiel de Laravel pour connaître la configuration requise du serveur avant de commencer. [Documentation officielle](https://laravel.com/docs/5.4/installation#installation)


Cloner le repository

    git clone git@github.com:DavithCH/calendar-app-react.git

Switcher sur le dossier repo

    cd CalendlyProjet-PaulSamuelAlainAntoine

Installer toutes les dependances à l'aide de composer

    composer install

Copiez le fichier env d'exemple et effectuez les changements de configuration requis dans le fichier .env.

    cp .env.example .env

Générer une nouvelle clé d'application

    php artisan key:generate

Générer une nouvelle clé secrète d'authentification JWT

    php artisan jwt:generate

Exécuter les migrations de la base de données (**Définir la connexion de la base de données dans .env avant de migrer**)

    php artisan migrate

Lancer le serveur de développement local

    php artisan serve

Vous pouvez maintenant accéder au serveur à l'adresse http://localhost:8000

**Assurez-vous de définir les informations de connexion correctes à la base de données avant d'exécuter les migrations** [Variables d'environnement](#environment-variables)

    php artisan migrate
    php artisan serve

Creer la base de donnée "Calendrier" dans votre MySQL
