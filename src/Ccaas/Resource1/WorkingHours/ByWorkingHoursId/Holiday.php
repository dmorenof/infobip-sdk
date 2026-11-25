<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1\WorkingHours\ByWorkingHoursId;

final class Holiday extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /ccaas/1/working-hours/{workingHoursId}/holiday [operationId: create-working-hours-holiday] */
    /**
     * Create working hours holiday
     *
     * Use this method to create a holiday on working hours.
     * An auto-reply message will be sent to the customer when working hours are set and enabled and a new conversation is created outside of working hours,
     * or a holiday is set for the enabled working hours and a new conversation is created during the holiday.
     * This method will return a full working hours object with a created holiday in it.
     */
    public static function post(string $workingHoursId, \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\HolidaysApiModel $payload): \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\WorkingHours\ByWorkingHoursId\Holiday::class)->post($workingHoursId, $payload);
    }

    /** DELETE /ccaas/1/working-hours/{workingHoursId}/holiday/{id} [operationId: delete-working-hours-holiday] */
    /**
     * Remove working hours holiday
     *
     * Use this method to remove a holiday from working hours.
     */
    public static function deleteById(\InfobipSDK\PathParams\Ccaas\Resource1\WorkingHours\ByWorkingHoursId\Holiday\ById $identifier): \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\WorkingHours\ByWorkingHoursId\Holiday::class)->deleteById($identifier);
    }
}
