<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Omni\Resource1;

final class Scenarios extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/omni/1/scenarios',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            409 => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            409 => [
                'type' => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N17bf4973053f0fd3d8ac737d4e4f0aca51beba611d8f8dda63e2fbc35b478ef9\\ScenariosResponse',
    ];

    /**
     * List all OMNI failover scenarios
     *
     * See all failover scenarios that you have created.
     */
    public function get(?\InfobipSDK\GetParams\Omni\Resource1\Scenarios $params = null): \InfobipSDK\DTOs\N17bf4973053f0fd3d8ac737d4e4f0aca51beba611d8f8dda63e2fbc35b478ef9\ScenariosResponse
    {
        /** @var \InfobipSDK\DTOs\N17bf4973053f0fd3d8ac737d4e4f0aca51beba611d8f8dda63e2fbc35b478ef9\ScenariosResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/omni/1/scenarios',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            409 => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            409 => [
                'type' => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N9ac20aaa973a4193ff0ca88a25f8778624dcef15967a470e5d05a9222eb15517\\Scenario',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N04790a6ae08cb63186016b6e4b8eb1c003a31d6a3227220686470a5721dc2d02\\CreateOrUpdateScenarioRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create new OMNI failover scenario
     *
     * Define which channels, and in which order, would you like to use in your message failover scenario. If the delivery of the message fails for the first channel, we will use the next channel in your scenario, and so on.
     */
    public function post(\InfobipSDK\DTOs\N04790a6ae08cb63186016b6e4b8eb1c003a31d6a3227220686470a5721dc2d02\CreateOrUpdateScenarioRequest $payload): \InfobipSDK\DTOs\N9ac20aaa973a4193ff0ca88a25f8778624dcef15967a470e5d05a9222eb15517\Scenario
    {
        /** @var \InfobipSDK\DTOs\N9ac20aaa973a4193ff0ca88a25f8778624dcef15967a470e5d05a9222eb15517\Scenario $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array GET_BY_SCENARIO_KEY = [
        'method' => 'GET',
        'path' => '/omni/1/scenarios/{scenarioKey}',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
            409 => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
                'schemaNullable' => false,
            ],
            409 => [
                'type' => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N9ac20aaa973a4193ff0ca88a25f8778624dcef15967a470e5d05a9222eb15517\\Scenario',
    ];

    /**
     * Get specific OMNI failover scenario
     *
     * See configuration of a specific failover scenario.
     */
    public function getByScenarioKey(string $scenarioKey): \InfobipSDK\DTOs\N9ac20aaa973a4193ff0ca88a25f8778624dcef15967a470e5d05a9222eb15517\Scenario
    {
        /** @var \InfobipSDK\DTOs\N9ac20aaa973a4193ff0ca88a25f8778624dcef15967a470e5d05a9222eb15517\Scenario $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SCENARIO_KEY), path: ['scenarioKey' => $scenarioKey]);
        return $result;
    }

    private const array PUT_BY_SCENARIO_KEY = [
        'method' => 'PUT',
        'path' => '/omni/1/scenarios/{scenarioKey}',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
            409 => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
                'schemaNullable' => false,
            ],
            409 => [
                'type' => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N9ac20aaa973a4193ff0ca88a25f8778624dcef15967a470e5d05a9222eb15517\\Scenario',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N04790a6ae08cb63186016b6e4b8eb1c003a31d6a3227220686470a5721dc2d02\\CreateOrUpdateScenarioRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update OMNI failover scenario
     *
     * Change configuration of a specific failover scenario.
     */
    public function putByScenarioKey(string $scenarioKey, \InfobipSDK\DTOs\N04790a6ae08cb63186016b6e4b8eb1c003a31d6a3227220686470a5721dc2d02\CreateOrUpdateScenarioRequest $payload): \InfobipSDK\DTOs\N9ac20aaa973a4193ff0ca88a25f8778624dcef15967a470e5d05a9222eb15517\Scenario
    {
        /** @var \InfobipSDK\DTOs\N9ac20aaa973a4193ff0ca88a25f8778624dcef15967a470e5d05a9222eb15517\Scenario $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_SCENARIO_KEY), $payload, path: ['scenarioKey' => $scenarioKey]);
        return $result;
    }
}
