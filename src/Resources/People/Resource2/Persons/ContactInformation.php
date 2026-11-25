<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\People\Resource2\Persons;

final class ContactInformation extends \InfobipSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/people/2/persons/contactInformation',
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
        'responseType' => '\\InfobipSDK\\Responses\\People\\Resource2\\Persons\\ContactInformation\\Delete\\PersonsContactInformationResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\InformationBodyRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Delete contact information from person
     *
     * Use this method to delete specified emails and mobile phones from a particular person.
     */
    public function delete(?\InfobipSDK\DeleteParams\People\Resource2\Persons\ContactInformation $params = null): \InfobipSDK\Responses\People\Resource2\Persons\ContactInformation\Delete\PersonsContactInformationResponse
    {
        /** @var \InfobipSDK\Responses\People\Resource2\Persons\ContactInformation\Delete\PersonsContactInformationResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE), parameters: $params);
        return $result;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/people/2/persons/contactInformation',
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
        'responseType' => '\\InfobipSDK\\Responses\\People\\Resource2\\Persons\\ContactInformation\\Patch\\PersonsContactInformationResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\AllOfAddPersonContactInformationBody\\InformationBodyRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Add contact information to person
     *
     * Use this method to add emails and mobile phones to a particular person.
     */
    public function patch(?\InfobipSDK\PatchParams\People\Resource2\Persons\ContactInformation $params = null): \InfobipSDK\Responses\People\Resource2\Persons\ContactInformation\Patch\PersonsContactInformationResponse
    {
        /** @var \InfobipSDK\Responses\People\Resource2\Persons\ContactInformation\Patch\PersonsContactInformationResponse $result */
        $result = $this->executeArguments(self::operation(self::PATCH), parameters: $params);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/people/2/persons/contactInformation',
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
        'responseType' => '\\InfobipSDK\\Responses\\People\\Resource2\\Persons\\ContactInformation\\Put\\PersonsContactInformationResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\AllOfSetPersonContactInformationBody\\InformationBodyRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Set contact information to person
     *
     * Use this method to replace contact information for a particular person. This methods will replace all existing emails and mobile phones with new contact information.
     */
    public function put(?\InfobipSDK\PutParams\People\Resource2\Persons\ContactInformation $params = null): \InfobipSDK\Responses\People\Resource2\Persons\ContactInformation\Put\PersonsContactInformationResponse
    {
        /** @var \InfobipSDK\Responses\People\Resource2\Persons\ContactInformation\Put\PersonsContactInformationResponse $result */
        $result = $this->executeArguments(self::operation(self::PUT), parameters: $params);
        return $result;
    }

}
