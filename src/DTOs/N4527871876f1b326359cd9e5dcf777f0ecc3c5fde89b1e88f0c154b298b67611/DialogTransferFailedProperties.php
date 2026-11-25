<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * DialogTransferFailedProperties
 *
 * Properties of the event emitted when a dialog transfer fails.
 */
final class DialogTransferFailedProperties extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ErrorCodeInfo $errorCode;
    /**
     * Whether the dialog transfer has been finalized. If `false`, the dialog remains in the `TRANSFERRING` state and the transfer can be retried.
     */
    public bool $finalized;
    /**
     * Identifier that correlates all events belonging to the same dialog transfer.
     */
    public string $transferId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errorCode' => $value instanceof \stdClass ? $this->errorCode = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ErrorCodeInfo($value) : parent::assignMember($name, $value),
            'finalized' => is_bool($value) ? $this->finalized = $value : parent::assignMember($name, $value),
            'transferId' => is_string($value) ? $this->transferId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
