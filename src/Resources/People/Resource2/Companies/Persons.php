<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\People\Resource2\Companies;

final class Persons extends \InfobipSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/people/2/companies/persons',
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
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\AllOfBatchRemovePersonsFromCompanyBody\\CompanyBodyRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Remove persons from company batch
     *
     * Use this method to remove persons from a company.<br>**NOTE** Array size is limited to `1000` persons.
     */
    public function delete(?\InfobipSDK\DeleteParams\People\Resource2\Companies\Persons $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE), parameters: $params);
        return;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/people/2/companies/persons',
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
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\AllOfBatchAddPersonsToCompanyBody\\CompanyBodyRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Add persons to company batch
     *
     * Use this method to add persons to a company.<br>**NOTE** Array size is limited to `1000` persons.
     */
    public function patch(?\InfobipSDK\PatchParams\People\Resource2\Companies\Persons $params = null): void
    {
        $this->executeArguments(self::operation(self::PATCH), parameters: $params);
        return;
    }

}
