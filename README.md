## magento-dev
Magento v1 application environment

The purpose of this project is to demonstrate ways to build/customize/test a 
Magento v1 webstore with various 3rd party extensions and PHP modules. The goal 
is to decouple features and customizations from base code and 3rd party extensions.
  

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

* ["Example Feature" Magento extension](https://github.com/ryaan-anthony/magento-example-feature) is installed 
  - Leverages ["Content Builder" PHP module](https://github.com/ryaan-anthony/simple-content-builder) to provide model data
  - Ordered list of HTML blocks are displayed on the homepage
  
![Screenshot](https://github.com/ryaan-anthony/magento-dev/raw/master/docs/assets/example_feature/screenshot.png "Screenshot")
![Inspect DOM](https://github.com/ryaan-anthony/magento-dev/raw/master/docs/assets/example_feature/inspect_dom.png "Inspect DOM")


## Roadmap (TODO)

```
* Integration tests
* Add CICD badges
```

- - -
Tested using PHP7.2 and MYSQL5.6
