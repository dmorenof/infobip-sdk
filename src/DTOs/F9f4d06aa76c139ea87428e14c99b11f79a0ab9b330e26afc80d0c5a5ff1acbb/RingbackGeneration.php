<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9f4d06aa76c139ea87428e14c99b11f79a0ab9b330e26afc80d0c5a5ff1acbb;

/**
 * RingbackGeneration
 *
 * Option to generate a consistent local ringback tone, overriding remote ringing tones. It applies only to `INBOUND` parent calls in the `CALLING` state; otherwise, it is ignored.
 */
final class RingbackGeneration extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Flag indicating whether ringback generation is enabled. Cannot be `true` when `childCallRinging` is `true`.
     */
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
