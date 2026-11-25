<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657;

/**
 * ShareRequest
 * Example: {"accounts":["7CB64E2791F1A14E5BFEBED41A70F08D"]}
 */
final class ShareRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'accounts',
    ];

    /**
     * List of sub account identifiers. Identifiers are account keys.
     */
    public \InfobipSDK\Collections\StringCollection $accounts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->accounts = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
