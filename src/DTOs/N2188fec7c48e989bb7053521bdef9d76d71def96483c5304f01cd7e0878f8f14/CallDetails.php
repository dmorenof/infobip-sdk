<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * CallDetails
 *
 * Call details.
 */
class CallDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14.PhoneCallDetails' => 'InfobipSDK\\DTOs\\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\\PhoneCallDetails',
        '2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14.RoomCallDetails' => 'InfobipSDK\\DTOs\\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\\RoomCallDetails',
        '2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14.WebRtcCallDetails' => 'InfobipSDK\\DTOs\\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\\WebRtcCallDetails',
        'PHONE' => 'InfobipSDK\\DTOs\\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\\PhoneCallDetails',
        'ROOM' => 'InfobipSDK\\DTOs\\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\\RoomCallDetails',
        'WEBRTC' => 'InfobipSDK\\DTOs\\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\\WebRtcCallDetails',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\DestinationType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\DestinationType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
