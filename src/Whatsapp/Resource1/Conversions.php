<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1;

final class Conversions extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /whatsapp/1/conversions [operationId: submit-whatsapp-conversions] */
    /**
     * Submit conversions
     *
     * Submit WhatsApp conversion events. Events are indivisible, either all are submitted or none.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function post(\InfobipSDK\DTOs\D787c8758e54290e2bc82a005b86f9050517ec4ab2e17f0a4cc0942f51132c33\ConversionEventRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Conversions::class)->post($payload);
    }

}
