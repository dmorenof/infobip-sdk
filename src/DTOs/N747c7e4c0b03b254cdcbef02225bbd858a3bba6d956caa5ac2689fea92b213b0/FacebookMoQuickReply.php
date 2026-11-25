<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * FacebookMoQuickReply
 */
final class FacebookMoQuickReply extends \Dmorenof\SdkRuntime\DTO
{
    public string $payload;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payload' => is_string($value) ? $this->payload = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
