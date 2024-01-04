# Mage2 Module Muhib Stripe

    ``muhib/module-stripe``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Specifications](#markdown-header-specifications)


## Main Functionalities
Change currency code

## Installation
\* = in production please use the `--keep-generated` option

### Zip file

 - Unzip the zip file in `app/code/Muhib`
 - Enable the module by running `php bin/magento module:enable Muhib_Stripe`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

## Specifications

 - Plugin
	- aroundGetParamsFrom - StripeIntegration\Payments\Model\PaymentIntent > Muhib\Stripe\Plugin\StripeIntegration\Payments\Model\PaymentIntent



