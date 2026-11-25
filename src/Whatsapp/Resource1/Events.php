<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1;

final class Events extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /whatsapp/1/events [operationId: send-whatsapp-events] */
    /**
     * Send WhatsApp events
     *
     * Send WhatsApp events to multiple recipients.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function post(\InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\WhatsAppEventRequest $payload): \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Events::class)->post($payload);
    }

}
