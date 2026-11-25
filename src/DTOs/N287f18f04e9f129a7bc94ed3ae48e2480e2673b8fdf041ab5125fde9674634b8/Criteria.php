<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * Criteria
 *
 * Criteria type.
 */
class Criteria extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.ApplicationCriteria' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\ApplicationCriteria',
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.PhoneCriteria' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\PhoneCriteria',
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.SipCriteria' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\SipCriteria',
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.WebRTCCriteria' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\WebRTCCriteria',
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.WhatsAppCriteria' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\WhatsAppCriteria',
    'APPLICATION' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\ApplicationCriteria',
    'PHONE' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\PhoneCriteria',
    'SIP' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\SipCriteria',
    'WEBRTC' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\WebRTCCriteria',
    'WHATSAPP' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\WhatsAppCriteria',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CriteriaType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CriteriaType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
