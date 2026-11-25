<?php

declare(strict_types=1);

namespace InfobipSDK\Line\Resource1;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /line/1/messages [operationId: send-line-message] */
    /**
     * Send a LINE message
     *
     * Send one or more [LINE Official Notifications](https://www.infobip.com/docs/line/message-types#line-official-notifications-lon) messages to multiple recipients.
     * Documentation: https://www.infobip.com/docs/line
     */
    public static function post(\InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\LineRequest $payload): \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\Line\Resource1\Messages::class)->post($payload);
    }

}
