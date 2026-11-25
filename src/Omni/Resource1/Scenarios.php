<?php

declare(strict_types=1);

namespace InfobipSDK\Omni\Resource1;

final class Scenarios extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /omni/1/scenarios [operationId: get-omni-failover-scenarios] */
    /**
     * List all OMNI failover scenarios
     *
     * See all failover scenarios that you have created.
     */
    public static function get(?\InfobipSDK\GetParams\Omni\Resource1\Scenarios $params = null): \InfobipSDK\DTOs\N17bf4973053f0fd3d8ac737d4e4f0aca51beba611d8f8dda63e2fbc35b478ef9\ScenariosResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Omni\Resource1\Scenarios::class)->get($params);
    }

    /** POST /omni/1/scenarios [operationId: create-omni-failover-scenario] */
    /**
     * Create new OMNI failover scenario
     *
     * Define which channels, and in which order, would you like to use in your message failover scenario. If the delivery of the message fails for the first channel, we will use the next channel in your scenario, and so on.
     */
    public static function post(\InfobipSDK\DTOs\N04790a6ae08cb63186016b6e4b8eb1c003a31d6a3227220686470a5721dc2d02\CreateOrUpdateScenarioRequest $payload): \InfobipSDK\DTOs\N9ac20aaa973a4193ff0ca88a25f8778624dcef15967a470e5d05a9222eb15517\Scenario
    {
        return self::client()->resource(\InfobipSDK\Resources\Omni\Resource1\Scenarios::class)->post($payload);
    }

    /** GET /omni/1/scenarios/{scenarioKey} [operationId: get-omni-failover-scenario] */
    /**
     * Get specific OMNI failover scenario
     *
     * See configuration of a specific failover scenario.
     */
    public static function getByScenarioKey(string $scenarioKey): \InfobipSDK\DTOs\N9ac20aaa973a4193ff0ca88a25f8778624dcef15967a470e5d05a9222eb15517\Scenario
    {
        return self::client()->resource(\InfobipSDK\Resources\Omni\Resource1\Scenarios::class)->getByScenarioKey($scenarioKey);
    }

    /** PUT /omni/1/scenarios/{scenarioKey} [operationId: update-omni-failover-scenario] */
    /**
     * Update OMNI failover scenario
     *
     * Change configuration of a specific failover scenario.
     */
    public static function putByScenarioKey(string $scenarioKey, \InfobipSDK\DTOs\N04790a6ae08cb63186016b6e4b8eb1c003a31d6a3227220686470a5721dc2d02\CreateOrUpdateScenarioRequest $payload): \InfobipSDK\DTOs\N9ac20aaa973a4193ff0ca88a25f8778624dcef15967a470e5d05a9222eb15517\Scenario
    {
        return self::client()->resource(\InfobipSDK\Resources\Omni\Resource1\Scenarios::class)->putByScenarioKey($scenarioKey, $payload);
    }
}
