<?php

declare(strict_types=1);

namespace InfobipSDK\Ott\Rcs\Resource1\Message;

final class Bulk extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /ott/rcs/1/message/bulk [operationId: send-rcs-bulk-message] */
    /**
     * Send bulk RCS message
     *
     * Used for sending bulk RCS messages
     *
     * @deprecated
     */
    public static function post(\InfobipSDK\DTOs\N808c7c71509cd326700719db91283dfccde220d396434fc49825c692ac7499fd\RcsBulkSendRequest $payload): \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ott\Rcs\Resource1\Message\Bulk::class)->post($payload);
    }
}
