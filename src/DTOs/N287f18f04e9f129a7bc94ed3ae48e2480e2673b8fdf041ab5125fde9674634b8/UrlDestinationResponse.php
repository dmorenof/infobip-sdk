<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * UrlDestinationResponse
 */
class UrlDestinationResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.EndpointDestinationResponse' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\EndpointDestinationResponse',
    'ENDPOINT' => 'InfobipSDK\\DTOs\\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\\EndpointDestinationResponse',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\DestinationType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\DestinationType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
