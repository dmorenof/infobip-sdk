<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * Endpoint
 *
 * Details about participant.
 */
class Endpoint extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14.PhoneEndpoint' => 'InfobipSDK\\DTOs\\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\\PhoneEndpoint',
    '2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14.WebRtcEndpoint' => 'InfobipSDK\\DTOs\\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\\WebRtcEndpoint',
    'PHONE' => 'InfobipSDK\\DTOs\\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\\PhoneEndpoint',
    'WEBRTC' => 'InfobipSDK\\DTOs\\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\\WebRtcEndpoint',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\EndpointType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\EndpointType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
