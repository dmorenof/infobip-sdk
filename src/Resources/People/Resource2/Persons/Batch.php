<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\People\Resource2\Persons;

final class Batch extends \InfobipSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/people/2/persons/batch',
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
        'success' => [
            200,
            207,
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
        'responseTypes' => [
            200 => [
                'type' => '\\InfobipSDK\\Responses\\People\\Resource2\\Persons\\Batch\\DeleteStatus200\\BatchDeleteStatus200Response',
                'schemaNullable' => false,
            ],
            207 => [
                'type' => '\\InfobipSDK\\Responses\\People\\Resource2\\Persons\\Batch\\DeleteStatus207\\BatchDeleteStatus207Response',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\PeopleBodyRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Batch people delete
     *
     * Use this method to delete multiple persons.<br>**NOTE** Array size of the batch delete request is limited to `1000` persons.
     */
    public function delete(?\InfobipSDK\Requests\PeopleBodyRequest $payload = null): \InfobipSDK\Responses\People\Resource2\Persons\Batch\DeleteStatus200\BatchDeleteStatus200Response|\InfobipSDK\Responses\People\Resource2\Persons\Batch\DeleteStatus207\BatchDeleteStatus207Response
    {
        /** @var \InfobipSDK\Responses\People\Resource2\Persons\Batch\DeleteStatus200\BatchDeleteStatus200Response|\InfobipSDK\Responses\People\Resource2\Persons\Batch\DeleteStatus207\BatchDeleteStatus207Response $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::DELETE), $payload) : $this->executeArguments(self::operation(self::DELETE));
        return $result;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/people/2/persons/batch',
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
        'success' => [
            200,
            207,
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
        'responseTypes' => [
            200 => [
                'type' => '\\InfobipSDK\\Responses\\People\\Resource2\\Persons\\Batch\\PatchStatus200\\BatchPatchStatus200Response',
                'schemaNullable' => false,
            ],
            207 => [
                'type' => '\\InfobipSDK\\Responses\\People\\Resource2\\Persons\\Batch\\PatchStatus207\\BatchPatchStatus207Response',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\AllOfBatchPeopleUpdateBody\\UpdateBodyRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Batch people update
     *
     * Use this method to update multiple person profiles with the data passed in the request body as follows:<br>1. New values for standard and custom profile attributes replace existing values on the profile. If no value is passed in the request, the attribute keeps its value.<br>2. Tags in the request are appended to the profile tag list.<br>3. New contact information (email addresses and phone numbers) in the request is appended to the contact list of the profile.<br>**NOTE** Array size of the batch update request is limited to `1000` persons.
     */
    public function patch(?\InfobipSDK\Requests\AllOfBatchPeopleUpdateBody\UpdateBodyRequest $payload = null): \InfobipSDK\Responses\People\Resource2\Persons\Batch\PatchStatus200\BatchPatchStatus200Response|\InfobipSDK\Responses\People\Resource2\Persons\Batch\PatchStatus207\BatchPatchStatus207Response
    {
        /** @var \InfobipSDK\Responses\People\Resource2\Persons\Batch\PatchStatus200\BatchPatchStatus200Response|\InfobipSDK\Responses\People\Resource2\Persons\Batch\PatchStatus207\BatchPatchStatus207Response $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::PATCH), $payload) : $this->executeArguments(self::operation(self::PATCH));
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/people/2/persons/batch',
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
        'success' => [
            200,
            207,
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
        'responseTypes' => [
            200 => [
                'type' => '\\InfobipSDK\\Responses\\People\\Resource2\\Persons\\Batch\\PostStatus200\\BatchPostStatus200Response',
                'schemaNullable' => false,
            ],
            207 => [
                'type' => '\\InfobipSDK\\Responses\\People\\Resource2\\Persons\\Batch\\PostStatus207\\BatchPostStatus207Response',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\CreateBodyRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Batch people create
     *
     * Use this method to create multiple persons.<br>**NOTE** Array size of the batch create request is limited to `1000` persons.
     */
    public function post(?\InfobipSDK\Requests\CreateBodyRequest $payload = null): \InfobipSDK\Responses\People\Resource2\Persons\Batch\PostStatus200\BatchPostStatus200Response|\InfobipSDK\Responses\People\Resource2\Persons\Batch\PostStatus207\BatchPostStatus207Response
    {
        /** @var \InfobipSDK\Responses\People\Resource2\Persons\Batch\PostStatus200\BatchPostStatus200Response|\InfobipSDK\Responses\People\Resource2\Persons\Batch\PostStatus207\BatchPostStatus207Response $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }
}
