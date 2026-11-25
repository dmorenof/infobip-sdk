<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * AppleMfbEventOptions
 *
 * Event options.
 */
final class AppleMfbEventOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Platform $platform;
    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\ValidityPeriod $validityPeriod;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Platform($value) : parent::assignMember($name, $value),
            'validityPeriod' => $value instanceof \stdClass ? $this->validityPeriod = new \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\ValidityPeriod($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
