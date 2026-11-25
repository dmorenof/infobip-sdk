<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * AppealRequest
 */
final class AppealRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'reason',
    ];

    protected const array VALIDATION = [
        'reason' => [
            'minLength' => 10,
            'maxLength' => 2048,
        ],
    ];

    /**
     * The reason for the appeal.
     */
    public string $reason {
        set {
            $this->assigning('reason', $value);
            $this->reason = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
