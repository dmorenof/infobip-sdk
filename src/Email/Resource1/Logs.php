<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /email/1/logs [operationId: get-email-logs] */
    /**
     * Get email message logs
     *
     * This method allows you to get logs for sent emails using their messageId. Email logs are available for the last 48 hours.
     */
    public static function get(?\InfobipSDK\GetParams\Email\Resource1\Logs $params = null): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailLogResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Logs::class)->get($params);
    }

}
