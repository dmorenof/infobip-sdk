<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Ccaas\Resource1\WorkingHours\ById;

final class Status extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/ccaas/1/working-hours/{id}/status',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\\StatusCodeResponse',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\\StatusCodeResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\\WorkingHoursStatusApiResponse',
        'validation' => [
            'id' => [
                'minLength' => 1,
            ],
        ],
    ];

    /**
     * Get working hours status
     *
     * Use this method to get current status of working hours.
     */
    public function get(string $id): \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursStatusApiResponse
    {
        /** @var \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursStatusApiResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id]);
        return $result;
    }

}
