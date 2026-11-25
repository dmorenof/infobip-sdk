<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * ReviewSubmissionResponse
 *
 * Response containing the request UUID for tracking the AI review submission
 */
final class ReviewSubmissionResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique identifier for this AI review request.
     * Format: uuid
     */
    public string $requestUuid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'requestUuid' => is_string($value) ? $this->requestUuid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
