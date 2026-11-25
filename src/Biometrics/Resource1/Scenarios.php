<?php

declare(strict_types=1);

namespace InfobipSDK\Biometrics\Resource1;

final class Scenarios extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /biometrics/1/scenarios [operationId: get-biometrics-scenarios] */
    /**
     * Get Scenarios
     *
     * This function is used to retrieve all scenarios enabled for your account.
     */
    public static function get(?\InfobipSDK\GetParams\Biometrics\Resource1\Scenarios $params = null): \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\ScenarioResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Biometrics\Resource1\Scenarios::class)->get($params);
    }
}
