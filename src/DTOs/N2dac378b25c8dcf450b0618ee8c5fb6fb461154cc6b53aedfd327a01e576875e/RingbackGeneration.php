<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2dac378b25c8dcf450b0618ee8c5fb6fb461154cc6b53aedfd327a01e576875e;

/**
 * RingbackGeneration
 *
 * Option to generate a consistent local ringback tone, overriding remote ringing tones. If enabled, the ringback will be generated for the existing call, provided it joins the conference before the remote ringback of the new call starts.
 */
final class RingbackGeneration extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Flag indicating whether ringback generation is enabled. Cannot be `true` when `connectOnEarlyMedia` is `true`.
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
