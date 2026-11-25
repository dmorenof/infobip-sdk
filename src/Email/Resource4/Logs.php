<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource4;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /email/4/logs [operationId: get-email-message-logs] */
    /**
     * Get email message logs
     *
     * Use this method for displaying logs for example in the user interface. Available are the logs for the last 48 hours.
     */
    public static function get(?\InfobipSDK\GetParams\Email\Resource4\Logs $params = null): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\LogResponseEmailUnificationLog
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource4\Logs::class)->get($params);
    }

}
