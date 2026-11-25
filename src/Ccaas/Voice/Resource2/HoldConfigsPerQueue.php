<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2;

final class HoldConfigsPerQueue extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/voice/2/hold-configs-per-queue [operationId: get-multiple-hold-configs] */
    /**
     * Get hold configurations
     *
     * Use this endpoint to retrieve multiple hold configurations based on the page number and page size parameters. <a href="https://www.infobip.com/docs/conversations/calls#call-on-hold-set-up-calls" target="_blank">More info</a>.
     */
    public static function get(?\InfobipSDK\GetParams\Ccaas\Voice\Resource2\HoldConfigsPerQueue $params = null): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\HoldConfigWithQueuesApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\HoldConfigsPerQueue::class)->get($params);
    }

    /** POST /ccaas/voice/2/hold-configs-per-queue [operationId: create-hold-config] */
    /**
     * Create hold configuration
     *
     * Use this endpoint to create a new hold configuration, together with queues it is applied to. <a href="https://www.infobip.com/docs/conversations/calls#call-on-hold-set-up-calls" target="_blank">More info</a>.
     */
    public static function post(\InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\HoldConfigWithQueuesApiModel $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\HoldConfigWithQueuesApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\HoldConfigsPerQueue::class)->post($payload);
    }

    /** DELETE /ccaas/voice/2/hold-configs-per-queue/{id} [operationId: delete-hold-config] */
    /**
     * Delete hold configuration
     *
     * Use this endpoint to delete a single, already existing hold configuration by its id. <a href="https://www.infobip.com/docs/conversations/calls#call-on-hold-set-up-calls" target="_blank">More info</a>.
     */
    public static function deleteById(string $id): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\StatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\HoldConfigsPerQueue::class)->deleteById($id);
    }

    /** GET /ccaas/voice/2/hold-configs-per-queue/{id} [operationId: get-hold-config] */
    /**
     * Get hold configuration
     *
     * Use this endpoint to get a single hold configuration by its id. <a href="https://www.infobip.com/docs/conversations/calls#call-on-hold-set-up-calls" target="_blank">More info</a>.
     */
    public static function getById(string $id): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\HoldConfigWithQueuesApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\HoldConfigsPerQueue::class)->getById($id);
    }

    /** PUT /ccaas/voice/2/hold-configs-per-queue/{id} [operationId: update-hold-config] */
    /**
     * Update hold configuration
     *
     * Use this endpoint to update an already existing hold configuration. <a href="https://www.infobip.com/docs/conversations/calls#call-on-hold-set-up-calls" target="_blank">More info</a>.
     */
    public static function putById(string $id, \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\HoldConfigWithQueuesApiModel $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\HoldConfigWithQueuesApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\HoldConfigsPerQueue::class)->putById($id, $payload);
    }

}
