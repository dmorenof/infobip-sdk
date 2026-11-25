<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * IbResourceCapability
 *
 * Coverage by capability.
 */
final class IbResourceCapability extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\ResourceCapabilityChannel $channel;
    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceCoverage $coverage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\ResourceCapabilityChannel::from($value) : parent::assignMember($name, $value),
            'coverage' => $value instanceof \stdClass ? $this->coverage = new \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceCoverage($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
