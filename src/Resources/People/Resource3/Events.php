<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\People\Resource3;

final class Events extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/people/3/events',
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
            202,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\\ProblemDetailsResponse',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\\ProblemDetailsResponse',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\Collections\\EventsBodyCollection',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Batch Send Events
     *
     * Use this endpoint to batch import People events, including historical events that occurred up to `30` days ago. Batch items must reference an existing person profile and predefined [event type](https://portal.infobip.com/people/events/definitions). You can send up to `5000` events in a single batch. Each individual item within a batch must not exceed `512,000` bytes. The entire batch, which includes all items combined, must not exceed `15,728,640` bytes.<br>Each event in the batch must reference an existing person profile and a predefined event type. If an event references a person identifier that does not match any existing profile, a new `CUSTOMER` profile will automatically be created for that identifier. <br>**Note**: The entire batch will fail to import if any single event fails due to missing event type, properties, etc.
     */
    public function post(?\InfobipSDK\Collections\EventsBodyCollection $payload = null): void
    {
        func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return;
    }

}
