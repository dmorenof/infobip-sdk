<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * DialogTransferFinishedProperties
 *
 * Properties of the event emitted when a dialog transfer finishes successfully.
 */
final class DialogTransferFinishedProperties extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Identifier that correlates all events belonging to the same dialog transfer.
     */
    public string $transferId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'transferId' => is_string($value) ? $this->transferId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
