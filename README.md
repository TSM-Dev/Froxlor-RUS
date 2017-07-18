# Froxlor - Русский

Панель управления для сервера.
Разработана админами для админов. Имеет хостинговый функционал.

## Установка

### Быстрая установка
1. Проверьте, что вебсервер использует /var/www
2. Распакуйте Froxlor в папку /var/www
3. Перейдите по адресу http://[тут ip/dns Вашего сервера]/froxlor
4. Выполните установку по шагам при помощи установщика
5. Авторизуйтесь в Froxlor через учетную запись Админа
6. Настройте "Сервер > Настройки" так, как желаете
7. Выберите Ваш дистрибутив ОС в "Сервер > Конфигурация"
8. Продолжите настройку по шагам.
9. Пользуйтесь и радуйтесь! P.S> Не забудьте поставить звезду на GitHub :wink:

### Детальная установка
http://redmine.froxlor.org/projects/froxlor/wiki/Installationtarball

## Помощь

Если Вам нужна помощь, воспользуйтесь ресурсами ниже:

### IRC

Froxlor можно найти на freenode.net, канал #froxlor:
irc://chat.freenode.net/froxlor

### Форум

Сообщество Froxlor: http://forum.froxlor.org/

### Wiki

Больше документации можно найти в Froxlor - Wiki:
http://redmine.froxlor.org/projects/froxlor/wiki

## Лицензия

Лицензия проекта содержится в файле COPYING

## Загрузки
###### [ оригинальные файлы, без Русской локализации ]

### Tarball
http://files.froxlor.org/releases/froxlor-latest.tar.gz [MD5](http://files.froxlor.org/releases/froxlor-latest.tar.gz.md5) [SHA1](http://files.froxlor.org/releases/froxlor-latest.tar.gz.sha1)

### Репозиторий Debian

[Как устанавливать](https://github.com/Froxlor/Froxlor/wiki/Install-froxlor-on-debian)

/etc/apt/sources.list.d/froxlor.list
> deb http://debian.froxlor.org {wheezy|jessie} main

### Репозиторий Gentoo

[Как устанавливать](https://github.com/Froxlor/Froxlor/wiki/Install-froxlor-on-gentoo)

http://files.froxlor.org/gentoo/repositories.xml

## Let's Encrypt support

This version of Froxlor contains a test implementation of support for [Let's Encrypt](https://letsencrypt.org). This is (as Let's Encrypt is in itself)
still a beta version and may break your system. The way it currently works is by creating a (sub-)domain with the default system - certificate,
after which the Let's Encrypt cronjob orders the certificate for this (sub-)domain and inserts the certificates in the database. With the next run
of the default cronjob, the certificates will be updated on the disk and the webserver reloaded.

This has 2 known side-effects at the moment:
* The basic ip/port combinations don't work with the Froxlor - integration of Let's Encrypt, since it needs a certificate for the very first creation
* After creating a domain, it will have the default certificate for a short time (by default 5 minutes until the cronjob runs the next time)

It may be possible to fix these issues, but they are not a priority at the moment

## Contributing

[see here](.github/CONTRIBUTING.md)
