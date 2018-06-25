![Logo](https://raw.githubusercontent.com/Epistol/Search-Song/master/search.png)


# Search-Song [![Build Status](https://travis-ci.org/Epistol/Search-Song.svg?branch=master)](https://travis-ci.org/Epistol/Search-Song) [![Gitter chat](https://badges.gitter.im/gitterHQ/gitter.png)](https://gitter.im/Search-Song/Lobby)  [![Known Vulnerabilities](https://snyk.io/test/github/epistol/search-song/badge.svg)](https://snyk.io/test/github/epistol/search-song) [![StyleCI](https://styleci.io/repos/74824265/shield?branch=master)](https://styleci.io/repos/74824265)


Search Song is a online platform for listening parts of music from multiples online services.

## Prerequisites


[Instructions from our professors](https://drive.google.com/file/d/0B-vA3-U63KZXU2xkZnVxNktFU0E/view)

## Built With

* [Laravel](https://laravel.com/docs/5.3/) - The web framework used
* [Semantic UI](http://semantic-ui.com/introduction/getting-started.html) - CSS Part
* [Python](https://www.python.org/) - Retrieving informations
* A lot of time

## Authors

* **Quentin Rochet** - *Initial work and Python* - [Archadem](https://twitter.com/_Archadem_)
* **Michaël Lebeau** - *Online platform* - [Epistol](http://epistol.info)
* **Jean Jaillet & Loïc Demure** - *Servers* 

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Installation

###ENG : 

### FR :

#### Installer composer : 

Dans une console, entrer :


php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === 'aa96f26c2b67226a324c27919f1eb05f21c248b987e6195cad9690d5c1ff713d53020a02ac8c217dbf90a7eacc9d141d') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"


Si php retourne une erreur, installer un serveur web local (Laragon : https://laragon.org/) puis pointer dans les variables locales d'environnement (Système, Avancé, Variables d'environnement) : Path

Après le ";", ajouter le chemin de laragon (C:/laragon/bin/php)

Relancer cmd pour prendre en compte les modifications.


#### Installer le projet

Dans le dossier www de Laragon (avec le cmd), récuper le projet avec "git clone https://github.com/Epistol/Search-Song.git" 

Puis lancer la commande "composer install"
Installer une base de donnée à l'aide de localhost/phpmyadmin)


Récupérer le nom de la base, dupliquer .env.exemple en .env , changer les variables de base de données (database name, login (root) et password (aucun) ).

En ligne de commande avec cmd dans le projet, utiliser "php artisan migrate"
Puis "php artisan key:generate"


Terminer en modifiant le document root de Laragon dans ses paramètres en pointant sur /public du dossier Search-Song.
