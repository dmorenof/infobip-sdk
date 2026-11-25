<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2;

/**
 * RequestInfo
 */
final class RequestInfo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'requestId',
    'status',
];

    /**
     * Additional explanation in case of FAILED status.
     * Example: "Request processing failed due to an internal error."
     */
    public string $failureMessage;
    /**
     * Request ID.
     * Example: "B61D150B0F6596F68D88D253886432B5"
     */
    public string $requestId;
    public \InfobipSDK\Enums\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\ClientRequestStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'failureMessage' => is_string($value) ? $this->failureMessage = $value : parent::assignMember($name, $value),
            'requestId' => is_string($value) ? $this->requestId = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\ClientRequestStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
