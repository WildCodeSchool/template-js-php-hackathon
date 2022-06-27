# Template Hackathon JS/PHP

Symfony / React / API Platform

Requirements :

- php 7.x (mini)
- node 16.x (mini)
- composer
- yarn
- [symfony cli](https://symfony.com/download) 

To setup the project :

```shell
$ yarn install
```

```shell
$ composer install
```

Make a copy of the `.env` file

```shell
$ cp .env .env.local
```

Then change the `DATABASE_URL` with the correct informations.

Create the database : 

```shell
$ php bin/console doctrine:database:create
```

In two differents prompts :

```shell
$ symfony server:start
```
```shell
$ yarn encore dev-server
```

_For JS developpers :_

When you pull back code you'll need to update database schema and load the fixtures :

```shell
$ php bin/console doctrine:migrations:migrate
```

```shell
$ php bin/console doctrine:fixtures:load
```

Nb: to add more and more packages use [yarn](https://yarnpkg.com/) instead of npm
