<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6;

/**
 * DKIMCheck
 *
 * The result of a check of the DKIM authentication record of the inbound email.
 */
final class DKIMCheck extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'domains',
    'result',
];

    /**
     * List of domains which were used to validate DKIM.
     */
    public \InfobipSDK\Collections\StringCollection $domains;
    /**
     * Indicates whether the DKIM validation was successful.
     */
    public string $result;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'domains' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->domains = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'result' => is_string($value) ? $this->result = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
