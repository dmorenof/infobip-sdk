<?php

declare(strict_types=1);

namespace InfobipSDK\OpenChannel\Resource1\Messages;

final class Inbound extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /open-channel/1/messages/inbound [operationId: send-open-channel-inbound-message] */
    /**
     * Send Open Channel inbound message
     *
     * Sends a message to Open Channel destination registered on Infobip platform.
     */
    public static function post(\InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8\OpenChannelMessageRequest $payload): \InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8\OpenChannelMessageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\OpenChannel\Resource1\Messages\Inbound::class)->post($payload);
    }

}
