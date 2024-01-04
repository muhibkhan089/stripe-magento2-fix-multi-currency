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
        \Closure $proceed
    ) {
        //Your plugin code
        $result = $proceed();
        return $result;
    }
}

