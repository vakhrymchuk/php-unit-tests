# Установка phpunit
> $ sudo apt-get install phpunit

# Запуск тестов из командной строки
> $ phpunit MyClassTest.php

## Параметры запуска
>     --colors - цветной вывод
>     --debug - дополнительная информация

# [Статья по теме](http://habrahabr.ru/post/56289/)

# [Архив библиотеки для тестирования phpunit.phar](https://phar.phpunit.de/phpunit.phar)

# Git-лог на создание репозитория
1. git init
2. git add README.md
3. git commit -m "first commit"
4. git remote add origin git@github.com:vakhrymchuk/php-unit-tests.git
5. git push -u origin master
6. git add src
7. git add README.md
8. git commit -m "add MyClass with tests"
9. git push
10. git add src/MyClassTestWithDataProvider.php src/MyClassTestWithSetUp.php 
11. git add README.md
12. git commit -m "add extended test classes"
13. git push
