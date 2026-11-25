<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\People\Resource3\Segments\BySegmentId;

final class Persons extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/people/3/segments/{segmentId}/persons',
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
        'responseType' => '\\InfobipSDK\\DTOs\\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\\PagePersonV3',
        'querySerialization' => [
            'sort' => 'multi',
        ],
    ];

    /**
     * Get persons in a segment
     *
     * Use this method to get persons in a segment by ID.
     * Documentation: https://www.infobip.com/docs/people/manage-audience#segments
     */
    public function get(int $segmentId, ?\InfobipSDK\GetParams\People\Resource3\Segments\BySegmentId\Persons $params = null): \InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\PagePersonV3
    {
        /** @var \InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\PagePersonV3 $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['segmentId' => $segmentId], parameters: $params);
        return $result;
    }
}
