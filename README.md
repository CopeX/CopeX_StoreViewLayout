# Mage2 Module CopeX StoreViewLayout

    ``copex/module-storeviewlayout``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
It provides a layout handle by store_code and layout handle per website, for example store_{{storecode}}.xml or website_{{website_code}}.xml 
With this layout handle different layout commands per storeview or per website are possible. 

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/CopeX`
 - Enable the module by running `php bin/magento module:enable CopeX_StoreViewLayout`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require copex/module-storeviewlayout`
 - enable the module by running `php bin/magento module:enable CopeX_StoreViewLayout`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration
nothing to say here



## Specifications

 - Observer
	- load_layout_before > CopeX\StoreViewLayout\Observer\Frontend\Load\LayoutBefore

