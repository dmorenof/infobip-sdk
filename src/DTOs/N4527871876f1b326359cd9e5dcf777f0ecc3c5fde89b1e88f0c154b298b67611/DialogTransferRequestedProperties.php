<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * DialogTransferRequestedProperties
 *
 * Properties of the event emitted when a dialog transfer is requested.
 */
final class DialogTransferRequestedProperties extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Transfer destination.
     */
    public string $referTo;
    /**
     * Identifier that correlates all events belonging to the same dialog transfer.
     */
    public string $transferId;
    public \InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\Call $transferorCall;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'referTo' => is_string($value) ? $this->referTo = $value : parent::assignMember($name, $value),
            'transferId' => is_string($value) ? $this->transferId = $value : parent::assignMember($name, $value),
            'transferorCall' => $value instanceof \stdClass ? $this->transferorCall = new \InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\Call($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
