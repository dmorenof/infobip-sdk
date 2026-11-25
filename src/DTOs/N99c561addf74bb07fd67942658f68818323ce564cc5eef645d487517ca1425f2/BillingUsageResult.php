<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2;

/**
 * BillingUsageResult
 */
final class BillingUsageResult extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'requestId',
        'status',
    ];

    /**
     * Message describing the failure. Returned only if the request failed.
     */
    public string $failureMessage;
    public \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\BillingUsageMetadata $metadata;
    /**
     * Identifier of the original request, returned by [Query billing usage data](#platform/billing-usage-api/query-billing-usage) endpoint.
     */
    public string $requestId;
    public \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataResponse $response;
    public \InfobipSDK\Enums\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\QueryAggregateDataStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'failureMessage' => is_string($value) ? $this->failureMessage = $value : parent::assignMember($name, $value),
            'metadata' => $value instanceof \stdClass ? $this->metadata = new \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\BillingUsageMetadata($value) : parent::assignMember($name, $value),
            'requestId' => is_string($value) ? $this->requestId = $value : parent::assignMember($name, $value),
            'response' => $value instanceof \stdClass ? $this->response = new \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataResponse($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\QueryAggregateDataStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
