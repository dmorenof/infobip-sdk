<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Conversions;

final class Waba extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /whatsapp/1/conversions/waba [operationId: submit-waba-whatsapp-conversions] */
    /**
     * Submit WABA conversions
     *
     * Submit WhatsApp conversion events using your WhatsApp Business Account (WABA) phone number as the source. Each conversion event is linked to an ad click via ctwaClickId — a unique identifier contained within the inbound WhatsApp message originating from the ad. You can optionally include conversion details such as value and currency, and a conversion timestamp (up to 7 days in the past). Events are submitted in batches of up to 1,000 and are indivisible — either all are submitted or none.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function post(\InfobipSDK\DTOs\N52c80a2bd29a734b52d9eb3ddb9b5d8ef0cb7c55640245f275763458f4c36a60\WABAConversionEventRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Conversions\Waba::class)->post($payload);
    }
}
