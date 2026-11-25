<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Verifications\Get;

final class ByAppIdVerificationsResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
        'verifications',
    ];

    /**
     * Collection of verifications
     */
    public \InfobipSDK\Collections\Aa47d40354ee197e21ffad52d2c543bd4f729e250360a844e476aa80deff7b6e\VerificationResponse\VerificationsCollection $verifications;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'verifications' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->verifications = new \InfobipSDK\Collections\Aa47d40354ee197e21ffad52d2c543bd4f729e250360a844e476aa80deff7b6e\VerificationResponse\VerificationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Aa47d40354ee197e21ffad52d2c543bd4f729e250360a844e476aa80deff7b6e\Verification::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
