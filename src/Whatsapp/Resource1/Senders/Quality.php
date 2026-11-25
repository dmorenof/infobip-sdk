<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders;

final class Quality extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /whatsapp/1/senders/quality [operationId: get-whatsapp-senders-quality] */
    /**
     * Get quality information of WhatsApp senders
     *
     * Get WhatsApp sender information, such as quality rating, status, and current limit of given senders. Only senders associated with your account are included in the response.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function get(\InfobipSDK\GetParams\Whatsapp\Resource1\Senders\Quality $params): \InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\WhatsAppSenderQualityResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\Quality::class)->get($params);
    }
}
