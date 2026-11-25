<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Message\Interactive;

final class LocationRequest extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /whatsapp/1/message/interactive/location-request [operationId: send-whatsapp-interactive-location-request-message] */
    /**
     * Send WhatsApp interactive location request message
     *
     * Send an interactive location request message to a single recipient. Interactive location request messages can only be successfully delivered if the recipient has contacted the business within the last 24 hours, otherwise [template message](#channels/whatsapp/send-whatsapp-template-message) should be used. <br/> The API response will not contain the final delivery status, use [Delivery Reports](#channels/whatsapp/receive-whatsapp-delivery-reports) instead.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function post(\InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveLocationRequestMessage $payload): \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\SingleMessageInfo
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Message\Interactive\LocationRequest::class)->post($payload);
    }

}
