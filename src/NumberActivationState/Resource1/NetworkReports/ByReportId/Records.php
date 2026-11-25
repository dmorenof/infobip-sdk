<?php

declare(strict_types=1);

namespace InfobipSDK\NumberActivationState\Resource1\NetworkReports\ByReportId;

final class Records extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /number-activation-state/1/network-reports/{reportId}/records [operationId: get-single-report] */
    /**
     * Get Network Report content
     *
     * Get a paginated list of destination number activation state changes from a given Report.
     */
    public static function get(string $reportId, ?\InfobipSDK\GetParams\NumberActivationState\Resource1\NetworkReports\ByReportId\Records $params = null): \InfobipSDK\DTOs\N8018948352e80bbff88731d9fb43f611b84a58f2b44c304c63a8e4ae9c4bd661\PageReports
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberActivationState\Resource1\NetworkReports\ByReportId\Records::class)->get($reportId, $params);
    }
}
