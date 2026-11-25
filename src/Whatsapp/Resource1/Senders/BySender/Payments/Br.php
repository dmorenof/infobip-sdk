<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders\BySender\Payments;

final class Br extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /whatsapp/1/senders/{sender}/payments/br/{paymentId} [operationId: get-whatsapp-brazil-payment-status] */
    /**
     * Get Brazil payment status
     *
     * Get Brazil payment and transaction status.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function getByPaymentId(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Payments\Br\ByPaymentId $identifier): \InfobipSDK\DTOs\N3c57fc8acf96933d1896c672a41450fccb946974464fd5e3ce94ed2b207c06af\Payment
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Payments\Br::class)->getByPaymentId($identifier);
    }

}
