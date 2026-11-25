<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Forms\Resource1;

final class Forms extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/forms/1/forms',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N265dbb28cc1ed1396ae9d1feb97047d1e9ccf99987cba8dbae6c3a765606751c\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N265dbb28cc1ed1396ae9d1feb97047d1e9ccf99987cba8dbae6c3a765606751c\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\\ApiFormListDto',
    ];

    /**
     * Get forms
     *
     * Use this method to get a list of forms.
     */
    public function get(?\InfobipSDK\GetParams\Forms\Resource1\Forms $params = null): \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ApiFormListDto
    {
        /** @var \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ApiFormListDto $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/forms/1/forms/{id}',
        'security' => [
            [
                'APIKeyHeader' => [],
            ],
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N265dbb28cc1ed1396ae9d1feb97047d1e9ccf99987cba8dbae6c3a765606751c\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\N265dbb28cc1ed1396ae9d1feb97047d1e9ccf99987cba8dbae6c3a765606751c\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\\ApiFormDto',
    ];

    /**
     * Get form
     *
     * Use this method to get a form by its ID.
     */
    public function getById(string $id): \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ApiFormDto
    {
        /** @var \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ApiFormDto $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id]);
        return $result;
    }

}
