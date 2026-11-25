<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * ErrorProperties
 *
 * Detailed error description.
 */
final class ErrorProperties extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionType $actionType;
    /**
     * Unique error code in machine-readable format.
     */
    public string $errorCode;
    /**
     * Error details in human-readable format.
     */
    public string $errorDetails;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionType' => is_string($value) ? $this->actionType = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionType::from($value) : parent::assignMember($name, $value),
            'errorCode' => is_string($value) ? $this->errorCode = $value : parent::assignMember($name, $value),
            'errorDetails' => is_string($value) ? $this->errorDetails = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
