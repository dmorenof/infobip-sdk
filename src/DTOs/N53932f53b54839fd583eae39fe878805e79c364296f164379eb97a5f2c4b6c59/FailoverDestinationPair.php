<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * FailoverDestinationPair
 *
 * The SMS failover destination matching.
 */
final class FailoverDestinationPair extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'failover',
        'initial',
    ];

    /**
     * The failover destination address to be used instead of the original destination address. Addresses must be in international format (Example: `41793026727`)
     */
    public string $failover;
    /**
     * The initial destination address specified in the request.
     */
    public string $initial;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'failover' => is_string($value) ? $this->failover = $value : parent::assignMember($name, $value),
            'initial' => is_string($value) ? $this->initial = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
