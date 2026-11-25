<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource3;

final class Send extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /email/3/send [operationId: send-fully-featured-email] */
    /**
     * Send fully featured email
     *
     * Send an email or multiple emails to a recipient or multiple recipients with CC/BCC enabled.
     */
    public static function post(?\InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\SendRequestSchema $payload = null): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\SendResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource3\Send::class)->post($payload);
    }

}
