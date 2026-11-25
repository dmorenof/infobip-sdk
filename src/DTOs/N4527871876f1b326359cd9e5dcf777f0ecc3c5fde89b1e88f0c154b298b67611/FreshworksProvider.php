<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * FreshworksProvider
 */
final class FreshworksProvider extends \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PegasusProvider
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Twilio account sid of the trunk.
     */
    public string $accountSid;
    /**
     * Sip domain related to the trunk.
     */
    public string $sipDomain;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accountSid' => is_string($value) ? $this->accountSid = $value : parent::assignMember($name, $value),
            'sipDomain' => is_string($value) ? $this->sipDomain = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
