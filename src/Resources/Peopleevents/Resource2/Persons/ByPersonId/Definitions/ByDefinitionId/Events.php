<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Peopleevents\Resource2\Persons\ByPersonId\Definitions\ByDefinitionId;

final class Events extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/peopleevents/2/persons/{personId}/definitions/{definitionId}/events',
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
            201,
        ],
        'errors' => [
            400 => null,
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => null,
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\\EventResourceResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\Fadcd3a5e2560b383cc614bf34d902f536c2b4a12ddd61a5d337e7d4f40ab864\\EventResourceRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Send Event
     *
     * Use this endpoint to track events that persons perform. Your request must refer to existing person profile and [event definition](https://portal.infobip.com/people/events/definitions).
     */
    public function post(\InfobipSDK\PathParams\Peopleevents\Resource2\Persons\ByPersonId\Definitions\ByDefinitionId\Events $identifier, \InfobipSDK\PostParams\Peopleevents\Resource2\Persons\ByPersonId\Definitions\ByDefinitionId\Events $params): \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventResourceResponse
    {
        /** @var \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventResourceResponse $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier, parameters: $params);
        return $result;
    }
}
