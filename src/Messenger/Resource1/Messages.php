<?php

declare(strict_types=1);

namespace InfobipSDK\Messenger\Resource1;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /messenger/1/messages [operationId: send-messenger-message] */
    /**
     * Send a Messenger message
     *
     * Send one or more messages to multiple recipients. <br/> Marketing messages on Messenger are no longer available for new users. For existing users, this feature will be deprecated on January 12, 2026. After this date, marketing messages will fail with an error.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public static function post(\InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\FacebookRequest $payload): \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\Messenger\Resource1\Messages::class)->post($payload);
    }
}
