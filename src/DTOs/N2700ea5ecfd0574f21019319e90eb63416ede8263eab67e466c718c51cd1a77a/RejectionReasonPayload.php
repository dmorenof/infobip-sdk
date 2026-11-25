<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * RejectionReasonPayload
 *
 * The rejection reasons details. This field is present only when new campaign registration status is 'REJECTED'.
 */
final class RejectionReasonPayload extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Rejection reason.
     * Example: "Campaign appears to be for an age gated content type but age gate attribute is not selected."
     */
    public string $description;
    /**
     * Predefined code.
     * Example: "1001"
     */
    public string $errorCode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'errorCode' => is_string($value) ? $this->errorCode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
