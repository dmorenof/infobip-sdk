<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Ff7f7515e81995b140ab1c879b88d9d297a14922c035a187e237cd81e7c216a0;

/**
 * HighDomainBounceWarnEvent
 */
final class HighDomainBounceWarnEvent extends \InfobipSDK\DTOs\Ff7f7515e81995b140ab1c879b88d9d297a14922c035a187e237cd81e7c216a0\EventDetails
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Account that owns the affected domain.
     * Example: "8F0792F86035A9F4290821F1EE6BC06A"
     */
    public string $accountKey;
    /**
     * The actual bounce rate detected that exceeded the threshold.
     * Format: double
     */
    public float $bounceRate;
    /**
     * The sender domain whose bounce rate exceeded the configured threshold.
     * Example: "example.com"
     */
    public string $domain;
    public \InfobipSDK\Enums\Ff7f7515e81995b140ab1c879b88d9d297a14922c035a187e237cd81e7c216a0\WebhookScope $scope;
    /**
     * The configured bounce rate warning threshold for the domain.
     * Format: double
     */
    public float $warnThreshold;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accountKey' => is_string($value) ? $this->accountKey = $value : parent::assignMember($name, $value),
            'bounceRate' => is_float($value) ? $this->bounceRate = $value : parent::assignMember($name, $value),
            'domain' => is_string($value) ? $this->domain = $value : parent::assignMember($name, $value),
            'scope' => is_string($value) ? $this->scope = \InfobipSDK\Enums\Ff7f7515e81995b140ab1c879b88d9d297a14922c035a187e237cd81e7c216a0\WebhookScope::from($value) : parent::assignMember($name, $value),
            'warnThreshold' => is_float($value) ? $this->warnThreshold = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
