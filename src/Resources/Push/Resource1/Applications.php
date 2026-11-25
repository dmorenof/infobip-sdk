<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Push\Resource1;

final class Applications extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/push/1/applications',
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
            400 => '\\InfobipSDK\\DTOs\\N18a8b746d2b3a8fcfed338bade07f6facb992e3867826d141a0e0ae5a3ba5642\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N18a8b746d2b3a8fcfed338bade07f6facb992e3867826d141a0e0ae5a3ba5642\\ApiException',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N5c2cf40bcaa0da78551dad80ceca0bb519c9f9fe84d6b1fad64401849b63d9ac\\ApplicationResponse',
    ];

    /**
     * Get push applications
     *
     * The following method allows you to fetch all application profiles configured on a single account.
     */
    public function get(): \InfobipSDK\DTOs\N5c2cf40bcaa0da78551dad80ceca0bb519c9f9fe84d6b1fad64401849b63d9ac\ApplicationResponse
    {
        /** @var \InfobipSDK\DTOs\N5c2cf40bcaa0da78551dad80ceca0bb519c9f9fe84d6b1fad64401849b63d9ac\ApplicationResponse $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

    private const array GET_BY_APPLICATION_CODE = [
        'method' => 'GET',
        'path' => '/push/1/applications/{applicationCode}',
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
            400 => '\\InfobipSDK\\DTOs\\N18a8b746d2b3a8fcfed338bade07f6facb992e3867826d141a0e0ae5a3ba5642\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N18a8b746d2b3a8fcfed338bade07f6facb992e3867826d141a0e0ae5a3ba5642\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N5c2cf40bcaa0da78551dad80ceca0bb519c9f9fe84d6b1fad64401849b63d9ac\\ApplicationsResponse',
    ];

    /**
     * Get push Application by applicationCode
     *
     * The following method allows you to fetch information about a specific application profile.
     */
    public function getByApplicationCode(string $applicationCode, ?\InfobipSDK\GetParams\Push\Resource1\Applications\ByApplicationCode $params = null): \InfobipSDK\DTOs\N5c2cf40bcaa0da78551dad80ceca0bb519c9f9fe84d6b1fad64401849b63d9ac\ApplicationsResponse
    {
        /** @var \InfobipSDK\DTOs\N5c2cf40bcaa0da78551dad80ceca0bb519c9f9fe84d6b1fad64401849b63d9ac\ApplicationsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_APPLICATION_CODE), path: ['applicationCode' => $applicationCode], parameters: $params);
        return $result;
    }

}
