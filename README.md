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

In two differents prompts :

```shell
$ symfony server:start
```

(you must run the php server before the node server, else proxy doesn't work)

```shell
$ yarn encore dev-server
```

Nb: to add more and more packages use [yarn](https://yarnpkg.com/) instead of npm
