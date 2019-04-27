## magento-dev
Magento v1 application environment

## Contents

1. [Installation](#installation)
1. [Example usage](#example-usage)
1. [Customizations](#customizations)
1. [Roadmap (TODO)](#roadmap-todo)


## Installation

#### Requirements

* [Composer](https://getcomposer.org/)
* Environment meets [Magento system requirements](https://docs.magento.com/m1/ce/user_guide/magento/system-requirements.html)


#### Setup instructions

* Install the app

```
composer install
```

* Run the tests

```
composer test
```


## Example usage

* Run the local server

```
cd magento
php -S magento.test:8000
```

* View [magento.test:8000](http://magento.test:8000/) in your browser

* Run Magento installer or seed the database as usual


## Customizations

* Example HTML is displayed on the homepage


## Roadmap (TODO)

```
* Add CICD badges
```

- - -
Tested using PHP7.2 and MYSQL5.6