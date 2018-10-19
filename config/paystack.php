<?php

/*
 * This file is part of the Laravel Paystack package.
 *
 * (c) Prosper Otemuyiwa <prosperotemuyiwa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /**
     * Public Key From Paystack Dashboard
     *
     */
    'publicKey' => getenv('pk_test_c76443ffe45b12f272001d815061625b57925bb0'),

    /**
     * Secret Key From Paystack Dashboard
     *
     */
    'secretKey' => getenv('sk_test_5c17328e76ececa8a0dfa711cab2ce6fb44e7104'),

    /**
     * Paystack Payment URL
     *
     */
    'paymentUrl' => getenv('https://api.paystack.co'),

    /**
     * Optional email address of the merchant
     *
     */
    'merchantEmail' => getenv('platinny10@gmail.com'),

];
