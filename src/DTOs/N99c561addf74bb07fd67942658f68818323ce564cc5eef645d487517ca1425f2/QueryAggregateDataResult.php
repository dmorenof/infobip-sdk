<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2;

/**
 * QueryAggregateDataResult
 */
final class QueryAggregateDataResult extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'requestId',
    'status',
];

    /**
     * The message describing the failure. This field is present only if the request failed.
     */
    public string $failureMessage;
    /**
     * The identifier of original request returned by [Query aggregated traffic data](#platform/metrics-api/query-aggregate-data) endpoint.
     */
    public string $requestId;
    public \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataResponse $response;
    public \InfobipSDK\Enums\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\QueryAggregateDataStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'failureMessage' => is_string($value) ? $this->failureMessage = $value : parent::assignMember($name, $value),
            'requestId' => is_string($value) ? $this->requestId = $value : parent::assignMember($name, $value),
            'response' => $value instanceof \stdClass ? $this->response = new \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataResponse($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\QueryAggregateDataStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
