define([
    'jquery',
    'Magento_Checkout/js/model/quote',
    'mage/utils/wrapper'
], function ($, quote, wrapper) {
    'use strict';

    return function (target) {
        return target.extend({
            getElementsCurrency: wrapper.wrap(target.prototype.getElementsCurrency, function (originalFunction) {
                var totals = quote.totals();
                if (totals && totals.base_currency_code) {
                    var currency = totals.base_currency_code;
                    return currency.toLowerCase();
                }

                // If base_currency_code is not available, use 'USD' as a fallback
                return 'USD';
            })
        });
    };
});
