<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1;

final class WorkingHours extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/1/working-hours [operationId: get-filtered-working-hours] */
    /**
     * Get filtered working hours
     *
     * Use this method to get a list of working hours with pagination and filtering options. Using filter is optional.
     * The result can be filtered by one or many optional filters described in the parameters.
     */
    public static function get(?\InfobipSDK\GetParams\Ccaas\Resource1\WorkingHours $params = null): \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursResultPageApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\WorkingHours::class)->get($params);
    }

    /** POST /ccaas/1/working-hours [operationId: create-working-hours] */
    /**
     * Create working hours
     *
     * Use this method to create new working hours.
     * An auto-reply message will be sent to the customer when working hours are set and enabled and a new conversation is created outside of working hours,
     * or a holiday is set for the enabled working hours and a new conversation is created during the holiday.
     */
    public static function post(\InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursApiRequest $payload): \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\WorkingHours::class)->post($payload);
    }

    /** DELETE /ccaas/1/working-hours/{id} [operationId: delete-working-hours] */
    /**
     * Delete working hours
     *
     * Use this method to delete working hours.
     */
    public static function deleteById(string $id): \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\WorkingHours::class)->deleteById($id);
    }

    /** GET /ccaas/1/working-hours/{id} [operationId: get-working-hours] */
    /**
     * Get working hours
     *
     * Use this method to get single working hours.
     */
    public static function getById(string $id): \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\WorkingHours::class)->getById($id);
    }

    /** PATCH /ccaas/1/working-hours/{id} [operationId: patch-working-hours] */
    /**
     * Patch working hours
     *
     * Use this method for working hours partial updating.
     */
    public static function patchById(string $id, \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursApiRequest $payload): \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\WorkingHours::class)->patchById($id, $payload);
    }

    /** PUT /ccaas/1/working-hours/{id} [operationId: update-working-hours] */
    /**
     * Update working hours
     *
     * Use this method to update working hours.
     */
    public static function putById(string $id, \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursApiRequest $payload): \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\WorkingHours::class)->putById($id, $payload);
    }
}
