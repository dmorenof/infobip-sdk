<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * RejectionReason
 *
 * Rejection reasons details.
 */
final class RejectionReason extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Rejection reason.
     */
    public string $description;
    /**
     * Predefined code.
     */
    public string $errorCode;
    /**
     * Recommended action.
     */
    public string $recommendedAction;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'errorCode' => is_string($value) ? $this->errorCode = $value : parent::assignMember($name, $value),
            'recommendedAction' => is_string($value) ? $this->recommendedAction = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
