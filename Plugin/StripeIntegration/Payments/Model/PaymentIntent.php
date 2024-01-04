<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Muhib\Stripe\Plugin\StripeIntegration\Payments\Model;

class PaymentIntent
{

    public function aroundGetParamsFrom(
        \StripeIntegration\Payments\Model\PaymentIntent $subject,
        \Closure $proceed,
        $quote,
        $order = null,
        $paymentMethodId = null
    ) {
         // Original implementation
         $result = $proceed($quote, $order, $paymentMethodId);

         // Modify the currency code
         if ($order) {
             $result['currency'] = strtolower($order->getBaseCurrencyCode());
         }
         else
        {
            $result['currency'] = strtolower($quote->getBaseCurrencyCode());
        }
 
         return $result;
    }
}

