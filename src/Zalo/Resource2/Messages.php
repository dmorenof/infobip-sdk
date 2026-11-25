<?php

declare(strict_types=1);

namespace InfobipSDK\Zalo\Resource2;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /zalo/2/messages [operationId: send-zalo-message] */
    /**
     * Send Zalo messages
     *
     * Send messages to multiple recipients. Only [template messages](https://www.infobip.com/docs/zalo/message-types) registered with Zalo can be sent. The API response will not contain the final delivery status, use [Delivery Reports](/docs/api/channels/zalo/zalo-logs-and-status-reports/receive-outbound-zalo-delivery-reports) instead.
     * Documentation: https://www.infobip.com/docs/zalo
     */
    public static function post(\InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloRequest $payload): \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\Zalo\Resource2\Messages::class)->post($payload);
    }

}
