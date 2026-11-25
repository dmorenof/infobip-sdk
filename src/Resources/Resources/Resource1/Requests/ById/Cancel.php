<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Resources\Resource1\Requests\ById;

final class Cancel extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/resources/1/requests/{id}/cancel',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'success' => [
            204,
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
    ];

    /**
     * Cancel resource request
     *
     * Cancels an existing resource request with Infobip. Resource request may only be canceled when in UPDATE_REQUESTED and UPDATE_REQUESTED_BY_INTERNAL_REVIEWER status.
     * Limited to ALPHANUMERIC_REGISTRATION, NUMBER_PURCHASE and RCS_SENDER_LAUNCH requests only.
     *
     */
    public function post(string $id): void
    {
        $this->executeArguments(self::operation(self::POST), path: ['id' => $id]);
        return;
    }

}
