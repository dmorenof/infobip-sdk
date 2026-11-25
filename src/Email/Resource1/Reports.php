<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /email/1/reports [operationId: get-email-delivery-reports] */
    /**
     * Get email delivery reports
     *
     * Get one-time delivery reports for all sent emails.
     */
    public static function get(?\InfobipSDK\GetParams\Email\Resource1\Reports $params = null): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\ApiReportsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Reports::class)->get($params);
    }

}
