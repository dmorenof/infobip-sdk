<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Efc1265916a727aef4eb46ff2e01c3e0ad0c1ad70cf38d568ed99c04a9a73fa0;

/**
 * RingbackGeneration
 *
 * Option to generate a consistent local ringback tone, overriding remote ringing tones. If enabled, the ringback will be generated for existing conference participants, if present, provided the new participant is added to the conference before its remote ringback starts. If the remote ringback has already started or finished, local ringback generation will not be applied.
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
