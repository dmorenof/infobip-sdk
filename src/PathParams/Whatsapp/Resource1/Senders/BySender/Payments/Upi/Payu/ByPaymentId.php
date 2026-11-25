<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Payments\Upi\Payu;

final class ByPaymentId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'paymentId',
        'sender',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'paymentId' => 'paymentId',
            'sender' => 'sender',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'paymentId' => [
            'minLength' => 1,
            'maxLength' => 25,
        ],
        'sender' => [
            'minLength' => 1,
        ],
    ];

    public string $paymentId {
        set {
            $this->assigning('paymentId', $value);
            $this->paymentId = $value;
        }
    }
    public string $sender {
        set {
            $this->assigning('sender', $value);
            $this->sender = $value;
        }
    }
}
