<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Payments;

final class Br extends \InfobipSDK\Client
{
    private const array GET_BY_PAYMENT_ID = [
        'method' => 'GET',
        'path' => '/whatsapp/1/senders/{sender}/payments/br/{paymentId}',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N790123005ad6e23bd7e4622ede8f0ed5301700e1d8b1837e5f4cdfdda800eaa2\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N790123005ad6e23bd7e4622ede8f0ed5301700e1d8b1837e5f4cdfdda800eaa2\\ApiException',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N3c57fc8acf96933d1896c672a41450fccb946974464fd5e3ce94ed2b207c06af\\Payment',
        'validation' => [
            'paymentId' => [
                'minLength' => 1,
                'pattern' => '^[A-Za-z0-9\\-_.]{1,35}$',
            ],
            'sender' => [
                'minLength' => 1,
            ],
        ],
    ];

    /**
     * Get Brazil payment status
     *
     * Get Brazil payment and transaction status.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public function getByPaymentId(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Payments\Br\ByPaymentId $identifier): \InfobipSDK\DTOs\N3c57fc8acf96933d1896c672a41450fccb946974464fd5e3ce94ed2b207c06af\Payment
    {
        /** @var \InfobipSDK\DTOs\N3c57fc8acf96933d1896c672a41450fccb946974464fd5e3ce94ed2b207c06af\Payment $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PAYMENT_ID), path: $identifier);
        return $result;
    }

}
