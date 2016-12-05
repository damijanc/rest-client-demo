![Travis status]
(https://travis-ci.org/damijanc/simple-rest.svg?branch=master)
# simple-rest
Example rest service using Symfony 3, Doctrine and MariaDB



## Installation:

* Run in project root ```composer install```
* Setup database ```mysql -u root < ./Model/generation.sql```

## How to run

* You can run the server with builtin php server just by
running ```php bin/console server:run```

## Tests

To run tests run ```./vendor/bin/phpunit``` in project root