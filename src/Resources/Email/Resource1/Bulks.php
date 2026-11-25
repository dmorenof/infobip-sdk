<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Email\Resource1;

final class Bulks extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/email/1/bulks',
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
            400 => '\\InfobipSDK\\DTOs\\N73f6910bb0f0a3f1f6a9e6796ff94e4b37e388cd86d56d7e974197854e7020f7\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N73f6910bb0f0a3f1f6a9e6796ff94e4b37e388cd86d56d7e974197854e7020f7\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N73f6910bb0f0a3f1f6a9e6796ff94e4b37e388cd86d56d7e974197854e7020f7\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N73f6910bb0f0a3f1f6a9e6796ff94e4b37e388cd86d56d7e974197854e7020f7\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\\BulkScheduleResponse',
    ];

    /**
     * Get scheduled bulks
     *
     * See the scheduled time of your Email messages.
     */
    public function get(\InfobipSDK\GetParams\Email\Resource1\Bulks $params): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\BulkScheduleResponse
    {
        /** @var \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\BulkScheduleResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/email/1/bulks',
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
            400 => '\\InfobipSDK\\DTOs\\N73f6910bb0f0a3f1f6a9e6796ff94e4b37e388cd86d56d7e974197854e7020f7\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N73f6910bb0f0a3f1f6a9e6796ff94e4b37e388cd86d56d7e974197854e7020f7\\ApiException',
            409 => '\\InfobipSDK\\DTOs\\N73f6910bb0f0a3f1f6a9e6796ff94e4b37e388cd86d56d7e974197854e7020f7\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N73f6910bb0f0a3f1f6a9e6796ff94e4b37e388cd86d56d7e974197854e7020f7\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N73f6910bb0f0a3f1f6a9e6796ff94e4b37e388cd86d56d7e974197854e7020f7\\ApiException',
                'schemaNullable' => false,
            ],
            409 => [
                'type' => '\\InfobipSDK\\DTOs\\N73f6910bb0f0a3f1f6a9e6796ff94e4b37e388cd86d56d7e974197854e7020f7\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\\BulkRescheduleResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\\BulkRescheduleRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Reschedule messages
     *
     * Change the date and time for sending scheduled messages.
     *
     * Before rescheduling, set the bulk status to `PAUSED`. After rescheduling, set the bulk status to `PENDING` to resume sending.
     */
    public function put(\InfobipSDK\PutParams\Email\Resource1\Bulks $params): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\BulkRescheduleResponse
    {
        /** @var \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\BulkRescheduleResponse $result */
        $result = $this->executeArguments(self::operation(self::PUT), parameters: $params);
        return $result;
    }

}
