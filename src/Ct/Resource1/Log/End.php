<?php

declare(strict_types=1);

namespace InfobipSDK\Ct\Resource1\Log;

final class End extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /ct/1/log/end/{messageId} [operationId: log-end-tag] */
    /**
     * Confirm conversion
     *
     * Use this endpoint to inform the Infobip platform about the successful conversion on your side. Infobip will use this information to monitor SMS performance and provide you with better service. To enable Conversion Tracking, set up the “tracking” object to “SMS” when [sending a message](https://www.infobip.com/docs/api/channels/sms/sms-messaging/outbound-sms) over HTTP API.
     * For more information, see: [Tracking Conversion](https://www.infobip.com/docs/sms/api#track-conversion).
     */
    public static function postByMessageId(string $messageId): \InfobipSDK\Responses\Ct\Resource1\Log\End\ByMessageId\Post\EndByMessageIdResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ct\Resource1\Log\End::class)->postByMessageId($messageId);
    }

}
