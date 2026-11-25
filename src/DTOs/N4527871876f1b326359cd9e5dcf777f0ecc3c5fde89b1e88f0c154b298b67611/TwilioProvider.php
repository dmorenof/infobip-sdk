<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * TwilioProvider
 */
final class TwilioProvider extends \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PegasusProvider
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Common Twilio Account SID for all domains. Cannot be changed after creation; include the existing value when updating the provider configuration.
     */
    public string $accountSid;
    /**
     * SIP domains in the format `DID-domain.twilio.com`, where DID contains digits only. On update, this list replaces all existing SIP domains; omitted domains are removed.
     */
    public \InfobipSDK\Collections\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TwilioProvider\SipDomainsCollection $sipDomains;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accountSid' => is_string($value) ? $this->accountSid = $value : parent::assignMember($name, $value),
            'sipDomains' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->sipDomains = new \InfobipSDK\Collections\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TwilioProvider\SipDomainsCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
