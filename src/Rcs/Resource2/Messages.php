<?php

declare(strict_types=1);

namespace InfobipSDK\Rcs\Resource2;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /rcs/2/messages [operationId: send-rcs-messages] */
    /**
     * Send RCS messages
     *
     * Send RCS messages or RCS template messages to multiple recipients. Maximum request size is 10MB. Including some fields will affect [billing type](https://www.infobip.com/docs/rcs/billing-types).
     * Documentation: https://www.infobip.com/docs/rcs
     */
    public static function post(\InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsMessageRequest $payload): \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource2\Messages::class)->post($payload);
    }

}
