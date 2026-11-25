<?php

declare(strict_types=1);

namespace InfobipSDK\Voice\Ivr\Resource1;

final class Scenarios extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /voice/ivr/1/scenarios [operationId: search-voice-ivr-scenarios] */
    /**
     * Search Voice IVR Scenarios
     *
     * This method allows you to search Voice IVR Scenarios by name. To get a list of all IVR Scenarios, make a request without any parameters.
     */
    public static function get(?\InfobipSDK\GetParams\Voice\Ivr\Resource1\Scenarios $params = null): \InfobipSDK\Collections\Voice\Ivr\Resource1\Scenarios\Get\Resource1ScenariosCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Ivr\Resource1\Scenarios::class)->get($params);
    }

    /** POST /voice/ivr/1/scenarios [operationId: create-a-voice-ivr-scenario] */
    /**
     * Create Voice IVR Scenarios
     *
     * This method allows you to create a Voice IVR Scenario. The IVR scenario will be removed if not used for more than 1 year.
     */
    public static function post(\InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\UpdateScenarioRequest $payload): \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\UpdateScenarioResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Ivr\Resource1\Scenarios::class)->post($payload);
    }

    /** DELETE /voice/ivr/1/scenarios/{id} [operationId: delete-a-voice-ivr-scenario] */
    /**
     * Delete Voice IVR Scenarios
     *
     * This method allows you to delete a Voice IVR Scenario.
     */
    public static function deleteById(string $id): void
    {
        self::client()->resource(\InfobipSDK\Resources\Voice\Ivr\Resource1\Scenarios::class)->deleteById($id);
    }

    /** GET /voice/ivr/1/scenarios/{id} [operationId: get-a-voice-ivr-scenario] */
    /**
     * Get a Voice IVR Scenario
     *
     * This method allows you to get a Voice IVR Scenario.
     */
    public static function getById(string $id): \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\UpdateScenarioResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Ivr\Resource1\Scenarios::class)->getById($id);
    }

    /** PUT /voice/ivr/1/scenarios/{id} [operationId: update-voice-ivr-scenario] */
    /**
     * Update Voice IVR Scenarios
     *
     * This method allows you to update a Voice IVR Scenario. Changes may take up to 10 minutes to apply.
     */
    public static function putById(string $id, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\UpdateScenarioRequest $payload): \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\UpdateScenarioResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Ivr\Resource1\Scenarios::class)->putById($id, $payload);
    }
}
