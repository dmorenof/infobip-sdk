<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * PegasusProvider
 */
class PegasusProvider extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.CiscoWebexProvider' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CiscoWebexProvider',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.FreshworksProvider' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\FreshworksProvider',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.GenesysCloudProvider' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\GenesysCloudProvider',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.MicrosoftDirectRoutingProvider' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MicrosoftDirectRoutingProvider',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.OpenAiProvider' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\OpenAiProvider',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.TwilioProvider' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\TwilioProvider',
    'CISCO_WEBEX' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CiscoWebexProvider',
    'FRESHWORKS' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\FreshworksProvider',
    'GENESYS_CLOUD' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\GenesysCloudProvider',
    'MICROSOFT_DIRECT_ROUTING' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MicrosoftDirectRoutingProvider',
    'OPENAI_REALTIME' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\OpenAiProvider',
    'TWILIO' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\TwilioProvider',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PegasusProviderTrunkType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PegasusProviderTrunkType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
