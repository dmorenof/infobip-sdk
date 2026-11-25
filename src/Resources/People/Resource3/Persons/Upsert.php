<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\People\Resource3\Persons;

final class Upsert extends \InfobipSDK\Client
{
    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/people/3/persons/upsert',
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
            207,
        ],
        'errors' => [
            400 => null,
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => 'mixed',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\Responses\\People\\Resource3\\Persons\\Upsert\\Patch',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\\UpsertRequestDocsSchema',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Batch partial people upsert
     *
     * Use this method to create or partially update person profiles by matching on identifiers such as external ID, email, or phone. If a match is identified, the existing profile is updated only with the provided data; any fields excluded from the request remain unchanged. If no match is identified, a new profile is created. The operation returns a status for each profile: CREATED, UPDATED, or NOT_MODIFIED. <br>**Notes:** <br>1. The batch size limit is 1000 persons. <br>2. Contact information (emails and phone numbers) in the request is checked only for formal validity. Ensure accuracy and absence of errors.
     */
    public function patch(\InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\UpsertRequestDocsSchema $payload): \InfobipSDK\Responses\People\Resource3\Persons\Upsert\Patch
    {
        /** @var \InfobipSDK\Responses\People\Resource3\Persons\Upsert\Patch $result */
        $result = $this->executeBody(self::operation(self::PATCH), $payload);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/people/3/persons/upsert',
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
            207,
        ],
        'errors' => [
            400 => null,
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => 'mixed',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\Responses\\People\\Resource3\\Persons\\Upsert\\Put',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\\UpsertRequestDocsSchema',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Batch full people upsert
     *
     * Use this method to create or fully replace person profiles by matching on identifiers such as external ID, email, or phone. If a match is identified, the existing profile is entirely replaced with the provided data; any fields excluded from the request will be cleared. If no match is identified, a new profile is created. The operation returns a status for each profile: CREATED, UPDATED, or NOT_MODIFIED.<br>**Notes:** <br>1. The batch size limit is 1000 persons. <br>2. Contact information (emails and phone numbers) in the request is checked only for formal validity. Ensure accuracy and absence of errors.
     */
    public function put(\InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\UpsertRequestDocsSchema $payload): \InfobipSDK\Responses\People\Resource3\Persons\Upsert\Put
    {
        /** @var \InfobipSDK\Responses\People\Resource3\Persons\Upsert\Put $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload);
        return $result;
    }

}
