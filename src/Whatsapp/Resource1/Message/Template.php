<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Message;

final class Template extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /whatsapp/1/message/template [operationId: send-whatsapp-template-message] */
    /**
     * Send WhatsApp template message
     *
     * Send a single or multiple template messages to one or more recipients. Template messages can be sent and delivered at anytime. Each template needs to be registered and pre-approved by WhatsApp. <br/> The API response will not contain the final delivery status, use [Delivery Reports](#channels/whatsapp/receive-whatsapp-delivery-reports) instead.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function post(\InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\BulkMessage $payload): \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\BulkMessageInfo
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Message\Template::class)->post($payload);
    }

}
