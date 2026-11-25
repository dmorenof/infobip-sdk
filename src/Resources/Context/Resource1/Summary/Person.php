<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Context\Resource1\Summary;

final class Person extends \InfobipSDK\Client
{
    private const array GET_BY_PERSON_ID = [
        'method' => 'GET',
        'path' => '/context/1/summary/person/{personId}',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\\PersonSummaryApiResponse',
        'validation' => [
            'personId' => [
                'minimum' => 1,
            ],
        ],
    ];

    /**
     * Get latest person summary
     *
     * Returns the latest summary for the person identified by personId, together with the latest value of each fact compiled across their interactions. Returns 404 when the person has no summary yet.
     */
    public function getByPersonId(int $personId): \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\PersonSummaryApiResponse
    {
        /** @var \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\PersonSummaryApiResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PERSON_ID), path: ['personId' => $personId]);
        return $result;
    }
}
