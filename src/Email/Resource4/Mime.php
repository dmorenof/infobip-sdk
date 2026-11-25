<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource4;

final class Mime extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /email/4/mime [operationId: send-mime-email] */
    /**
     * Send MIME email
     *
     * Send an email where you can specify the content as MIME message.
     */
    public static function post(?\InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\SendMimeRequestSchema $payload = null): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\SendResponse
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\InfobipSDK\Resources\Email\Resource4\Mime::class)->post();
        }
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource4\Mime::class)->post($payload);
    }
}
