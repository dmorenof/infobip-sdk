<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Ff7f7515e81995b140ab1c879b88d9d297a14922c035a187e237cd81e7c216a0;

/**
 * EventDetails
 *
 * Email platform event data.
 */
class EventDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        'HIGH_BOUNCE_RATE_BLOCKED' => 'InfobipSDK\\DTOs\\Ff7f7515e81995b140ab1c879b88d9d297a14922c035a187e237cd81e7c216a0\\HighDomainBounceBlockEvent',
        'HIGH_BOUNCE_RATE_WARNING' => 'InfobipSDK\\DTOs\\Ff7f7515e81995b140ab1c879b88d9d297a14922c035a187e237cd81e7c216a0\\HighDomainBounceWarnEvent',
        'ff7f7515e81995b140ab1c879b88d9d297a14922c035a187e237cd81e7c216a0.HighDomainBounceBlockEvent' => 'InfobipSDK\\DTOs\\Ff7f7515e81995b140ab1c879b88d9d297a14922c035a187e237cd81e7c216a0\\HighDomainBounceBlockEvent',
        'ff7f7515e81995b140ab1c879b88d9d297a14922c035a187e237cd81e7c216a0.HighDomainBounceWarnEvent' => 'InfobipSDK\\DTOs\\Ff7f7515e81995b140ab1c879b88d9d297a14922c035a187e237cd81e7c216a0\\HighDomainBounceWarnEvent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\Ff7f7515e81995b140ab1c879b88d9d297a14922c035a187e237cd81e7c216a0\WebhookNotificationType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\Ff7f7515e81995b140ab1c879b88d9d297a14922c035a187e237cd81e7c216a0\WebhookNotificationType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
