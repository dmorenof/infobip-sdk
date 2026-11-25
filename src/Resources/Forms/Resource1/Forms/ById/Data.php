<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Forms\Resource1\Forms\ById;

final class Data extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/forms/1/forms/{id}/data',
        'security' => [
            [
                'APIKeyHeader' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N265dbb28cc1ed1396ae9d1feb97047d1e9ccf99987cba8dbae6c3a765606751c\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\N265dbb28cc1ed1396ae9d1feb97047d1e9ccf99987cba8dbae6c3a765606751c\\ApiException',
            404 => '\\InfobipSDK\\DTOs\\N265dbb28cc1ed1396ae9d1feb97047d1e9ccf99987cba8dbae6c3a765606751c\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
                'type' => '\\InfobipSDK\\DTOs\\N265dbb28cc1ed1396ae9d1feb97047d1e9ccf99987cba8dbae6c3a765606751c\\ApiException',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\N265dbb28cc1ed1396ae9d1feb97047d1e9ccf99987cba8dbae6c3a765606751c\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\\ApiStatusResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\\FormDataPayloadMap',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Submit form data
     *
     * Use this method to submit form data.
     */
    public function post(string $id, \InfobipSDK\PostParams\Forms\Resource1\Forms\ById\Data $params): \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ApiStatusResponse
    {
        /** @var \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ApiStatusResponse $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], parameters: $params);
        return $result;
    }

}
