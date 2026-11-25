<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657;

/**
 * ShareResponse
 * Example: {"requestId":"786ac8d6-40e5-4dfb-a450-4f71cbb3fc6c"}
 */
final class ShareResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'requestId',
    ];

    /**
     * Request identifier.
     */
    public string $requestId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'requestId' => is_string($value) ? $this->requestId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
