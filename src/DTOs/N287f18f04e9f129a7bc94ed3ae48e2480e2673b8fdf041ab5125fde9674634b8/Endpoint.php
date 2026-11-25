<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * Endpoint
 *
 * Endpoint for a given destination.
 */
class Endpoint extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CallRoutingPhoneEndpoint' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\CallRoutingPhoneEndpoint',
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CallRoutingSipEndpoint' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\CallRoutingSipEndpoint',
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CallRoutingViberEndpoint' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\CallRoutingViberEndpoint',
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CallRoutingWhatsAppEndpoint' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\CallRoutingWhatsAppEndpoint',
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.WebRTCEndpoint' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\WebRTCEndpoint',
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.WebSocketEndpoint' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\WebSocketEndpoint',
    'PHONE' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\CallRoutingPhoneEndpoint',
    'SIP' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\CallRoutingSipEndpoint',
    'VIBER' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\CallRoutingViberEndpoint',
    'WEBRTC' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\WebRTCEndpoint',
    'WEBSOCKET' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\WebSocketEndpoint',
    'WHATSAPP' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\CallRoutingWhatsAppEndpoint',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\EndpointType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\EndpointType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
