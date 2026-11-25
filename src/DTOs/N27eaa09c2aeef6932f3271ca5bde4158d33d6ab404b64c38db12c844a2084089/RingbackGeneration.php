<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N27eaa09c2aeef6932f3271ca5bde4158d33d6ab404b64c38db12c844a2084089;

/**
 * RingbackGeneration
 *
 * Option to generate a consistent local ringback tone, overriding remote ringing tones. If enabled, the ringback will be generated for existing conference participants, provided they are present before the remote ringback of the new participant starts.
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
