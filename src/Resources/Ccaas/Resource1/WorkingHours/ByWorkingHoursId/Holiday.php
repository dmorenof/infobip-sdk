<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Ccaas\Resource1\WorkingHours\ByWorkingHoursId;

final class Holiday extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/ccaas/1/working-hours/{workingHoursId}/holiday',
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
            400 => '\\InfobipSDK\\DTOs\\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\\StatusCodeResponse',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\\StatusCodeResponse',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\\StatusCodeResponse',
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
                'type' => '\\InfobipSDK\\DTOs\\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\\StatusCodeResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\\WorkingHoursApiResponse',
        'validation' => [
            'workingHoursId' => [
                'minLength' => 1,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\\HolidaysApiModel',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create working hours holiday
     *
     * Use this method to create a holiday on working hours.
     * An auto-reply message will be sent to the customer when working hours are set and enabled and a new conversation is created outside of working hours,
     * or a holiday is set for the enabled working hours and a new conversation is created during the holiday.
     * This method will return a full working hours object with a created holiday in it.
     */
    public function post(string $workingHoursId, \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\HolidaysApiModel $payload): \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursApiResponse
    {
        /** @var \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursApiResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['workingHoursId' => $workingHoursId]);
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/ccaas/1/working-hours/{workingHoursId}/holiday/{id}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\\StatusCodeResponse',
        'validation' => [
            'id' => [
                'minLength' => 1,
            ],
            'workingHoursId' => [
                'minLength' => 1,
            ],
        ],
    ];

    /**
     * Remove working hours holiday
     *
     * Use this method to remove a holiday from working hours.
     */
    public function deleteById(\InfobipSDK\PathParams\Ccaas\Resource1\WorkingHours\ByWorkingHoursId\Holiday\ById $identifier): \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\StatusCodeResponse
    {
        /** @var \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\StatusCodeResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_ID), path: $identifier);
        return $result;
    }
}
