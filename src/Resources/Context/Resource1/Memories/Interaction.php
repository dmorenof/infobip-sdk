<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Context\Resource1\Memories;

final class Interaction extends \InfobipSDK\Client
{
    private const array GET_BY_INTERACTION_ID = [
        'method' => 'GET',
        'path' => '/context/1/memories/interaction/{interactionId}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\\InteractionMemoryApiResponse',
    ];

    /**
     * Get interaction memory
     *
     * Returns the interaction memory for the given interactionId within the calling account, including its topics and facts. Returns 404 if no such interaction memory exists.
     */
    public function getByInteractionId(string $interactionId): \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\InteractionMemoryApiResponse
    {
        /** @var \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\InteractionMemoryApiResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_INTERACTION_ID), path: ['interactionId' => $interactionId]);
        return $result;
    }

}
