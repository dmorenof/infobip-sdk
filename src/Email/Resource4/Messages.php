<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource4;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /email/4/messages [operationId: send-email-messages-api] */
    /**
     * Send email messages
     *
     * 99% of all use cases can be achieved by using this API method. Everything from sending a simple single message to a single destination, up to batch sending of personalized messages to the thousands of recipients with a single API request. Scheduling and every advanced feature you can think of is supported.
     * Documentation: https://www.infobip.com/docs/email
     */
    public static function post(\InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailRequest $payload): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource4\Messages::class)->post($payload);
    }

}
