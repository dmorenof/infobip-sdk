<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * ReplyTo
 */
final class ReplyTo extends \Dmorenof\SdkRuntime\DTO
{
    public string $mid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mid' => is_string($value) ? $this->mid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
