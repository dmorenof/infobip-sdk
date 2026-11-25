<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\People\Resource2\CustomAttributes\ByName;

final class Append extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/people/2/customAttributes/{name}/append',
        'security' => [
            [
                'Basic' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '4XX' => '\\InfobipSDK\\DTOs\\N85ef14f921059c8d596d8b833b8a149dc14381e2ba3cfb5faaea9e6ec02a0f36\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '5XX' => '\\InfobipSDK\\DTOs\\N85ef14f921059c8d596d8b833b8a149dc14381e2ba3cfb5faaea9e6ec02a0f36\\ApiException',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            '4XX' => [
                'type' => '\\InfobipSDK\\DTOs\\N85ef14f921059c8d596d8b833b8a149dc14381e2ba3cfb5faaea9e6ec02a0f36\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            '5XX' => [
                'type' => '\\InfobipSDK\\DTOs\\N85ef14f921059c8d596d8b833b8a149dc14381e2ba3cfb5faaea9e6ec02a0f36\\ApiException',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => 'array',
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\People\\Resource2\\CustomAttributes\\ByName\\Append\\AppendMapRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Append item to custom attribute
     *
     * Custom attributes with `LIST_OF_OBJECTS` type contain an array of items as a value. Using this API method, you can add a new item to the specified list type custom attribute of a specific person. The item you want to add should match the defined list schema.
     *
     * @return list<mixed>
     */
    public function post(string $name, ?\InfobipSDK\PostParams\People\Resource2\CustomAttributes\ByName\Append $params = null): array
    {
        /** @var list<mixed> $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['name' => $name], parameters: $params);
        return $result;
    }

}
