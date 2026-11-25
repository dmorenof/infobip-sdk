<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

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
