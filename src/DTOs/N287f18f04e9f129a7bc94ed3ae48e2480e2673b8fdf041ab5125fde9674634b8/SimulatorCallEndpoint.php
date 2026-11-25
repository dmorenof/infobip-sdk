<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * SimulatorCallEndpoint
 *
 * Simulator endpoint to be used for the simulation.
 */
class SimulatorCallEndpoint extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.SimulatorPhoneEndpoint' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\SimulatorPhoneEndpoint',
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.SimulatorSipEndpoint' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\SimulatorSipEndpoint',
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.SimulatorWebRTCEndpoint' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\SimulatorWebRTCEndpoint',
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.SimulatorWhatsAppEndpoint' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\SimulatorWhatsAppEndpoint',
    'PHONE' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\SimulatorPhoneEndpoint',
    'SIP' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\SimulatorSipEndpoint',
    'WEBRTC' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\SimulatorWebRTCEndpoint',
    'WHATSAPP' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\SimulatorWhatsAppEndpoint',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SimulatorCallEndpointType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SimulatorCallEndpointType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
