<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource4;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /email/4/reports [operationId: get-outbound-email-message-delivery-reports] */
    /**
     * Get email delivery reports
     *
     * Get one-time delivery reports for all sent emails.
     * Documentation: https://www.infobip.com/docs/email
     */
    public static function get(?\InfobipSDK\GetParams\Email\Resource4\Reports $params = null): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailDeliveryReports
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource4\Reports::class)->get($params);
    }
}
