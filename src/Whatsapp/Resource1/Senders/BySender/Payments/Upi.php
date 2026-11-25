<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders\BySender\Payments;

final class Upi extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /whatsapp/1/senders/{sender}/payments/upi/{paymentId} [operationId: get-whatsapp-upi-payment-status] */
    /**
     * Get India UPI PayU/Razorpay payment status
     *
     * Get India UPI PayU/Razor payment and transaction status.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function getByPaymentId(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Payments\Upi\ByPaymentId $identifier): \InfobipSDK\DTOs\N3c57fc8acf96933d1896c672a41450fccb946974464fd5e3ce94ed2b207c06af\Payment
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Payments\Upi::class)->getByPaymentId($identifier);
    }

}
