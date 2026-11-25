<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Forms\Resource1\Forms\ById;

final class Views extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/forms/1/forms/{id}/views',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\\ApiStatusResponse',
    ];

    /**
     * Increment form view count
     *
     * Use this method to increase the view counter of a specific form. It's used for proper statistics calculation. Statistics are available on the form performance page on the Portal.
     */
    public function post(string $id): \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ApiStatusResponse
    {
        /** @var \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ApiStatusResponse $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id]);
        return $result;
    }

}
