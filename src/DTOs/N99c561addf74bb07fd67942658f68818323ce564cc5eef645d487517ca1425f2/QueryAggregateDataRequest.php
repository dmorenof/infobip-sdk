<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2;

/**
 * QueryAggregateDataRequest
 */
final class QueryAggregateDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'callbackUrl',
        'request',
    ];

    /**
     *
     * The target URL that will receive the query processing results. The schema for this endpoint is documented at
     * [Receive Aggregated Data Result](#platform/metrics-api/receive-aggregate-data-result).
     *
     */
    public string $callbackUrl;
    public \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataRequest $request;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callbackUrl' => is_string($value) ? $this->callbackUrl = $value : parent::assignMember($name, $value),
            'request' => $value instanceof \stdClass ? $this->request = new \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataRequest($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
