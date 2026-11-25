<?php

declare(strict_types=1);

namespace InfobipSDK\Viber\Resource1\Message;

final class Image extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /viber/1/message/image [operationId: send-viber-image-message] */
    /**
     * Send Viber image message
     *
     * Send an image message to a single recipient.
     * Documentation: https://www.infobip.com/docs/viber
     *
     * @deprecated
     */
    public static function post(\InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberImageMessage $payload): \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\SingleMessageInfo
    {
        return self::client()->resource(\InfobipSDK\Resources\Viber\Resource1\Message\Image::class)->post($payload);
    }

}
