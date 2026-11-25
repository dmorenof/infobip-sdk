<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1\WorkingHours\ById;

final class Status extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/1/working-hours/{id}/status [operationId: get-working-hours-status] */
    /**
     * Get working hours status
     *
     * Use this method to get current status of working hours.
     */
    public static function get(string $id): \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursStatusApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\WorkingHours\ById\Status::class)->get($id);
    }
}
