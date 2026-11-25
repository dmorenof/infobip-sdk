<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * BulkCall
 *
 * Bulk call list.
 */
final class BulkCall extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'callId' => [
        'maxLength' => 128,
    ],
];

    /**
     * Unique call ID.
     */
    public string $callId {
        set {
            $this->assigning('callId', $value);
            $this->callId = $value;
        }
    }
    /**
     * Calls Configuration ID.
     */
    public string $callsConfigurationId;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BulkEndpoint $endpoint;
    /**
     * Client-defined call ID.
     */
    public string $externalId;
    /**
     * Caller identifier.
     */
    public string $from;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Platform $platform;
    /**
     * Failure reason in human-readable format.
     */
    public string $reason;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callId' => is_string($value) ? $this->callId = $value : parent::assignMember($name, $value),
            'callsConfigurationId' => is_string($value) ? $this->callsConfigurationId = $value : parent::assignMember($name, $value),
            'endpoint' => $value instanceof \stdClass ? $this->endpoint = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BulkEndpoint($value) : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Platform($value) : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
