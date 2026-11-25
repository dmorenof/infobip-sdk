<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

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
