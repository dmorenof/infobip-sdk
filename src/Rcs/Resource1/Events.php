<?php

declare(strict_types=1);

namespace InfobipSDK\Rcs\Resource1;

final class Events extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /rcs/1/events [operationId: send-rcs-events] */
    /**
     * Send RCS events
     *
     * Send RCS events to multiple recipients. Maximum request size is 10MB.
     * Documentation: https://www.infobip.com/docs/rcs
     */
    public static function post(\InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsEventRequest $payload): \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Events::class)->post($payload);
    }

}
