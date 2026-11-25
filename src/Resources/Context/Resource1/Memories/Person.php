<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Context\Resource1\Memories;

final class Person extends \InfobipSDK\Client
{
    private const array GET_BY_PERSON_ID = [
        'method' => 'GET',
        'path' => '/context/1/memories/person/{personId}',
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
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
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
        'responseType' => '\\InfobipSDK\\DTOs\\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\\InteractionMemoryPageApiResponse',
        'validation' => [
            'personId' => [
                'minimum' => 1,
            ],
        ],
    ];

    /**
     * Get person interaction memories
     *
     * Returns a paginated list of interaction memories recorded for the person identified by personId, each with its own topics and facts. Supports sorting via the `orderBy` and `direction` query parameters.
     */
    public function getByPersonId(int $personId, ?\InfobipSDK\GetParams\Context\Resource1\Memories\Person\ByPersonId $params = null): \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\InteractionMemoryPageApiResponse
    {
        /** @var \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\InteractionMemoryPageApiResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PERSON_ID), path: ['personId' => $personId], parameters: $params);
        return $result;
    }

}
