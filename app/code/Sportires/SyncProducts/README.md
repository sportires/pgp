# Mage2 Module Sportires SyncProducts

    ``sportires/module-syncproducts``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Modulo para sincronizar precio y stock entre Sportires y PGP

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Sportires`
 - Enable the module by running `php bin/magento module:enable Sportires_SyncProducts`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require sportires/module-syncproducts`
 - enable the module by running `php bin/magento module:enable Sportires_SyncProducts`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications

 - API Endpoint
	- POST - Sportires\SyncProducts\Api\SyncpriceManagementInterface > Sportires\SyncProducts\Model\SyncpriceManagement

 - API Endpoint
	- POST - Sportires\SyncProducts\Api\SyncstockManagementInterface > Sportires\SyncProducts\Model\SyncstockManagement

 - Helper
	- Sportires\SyncProducts\Helper\SyncData


## Attributes



