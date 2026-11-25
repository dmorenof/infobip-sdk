<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * WebsocketEndpointConfigRequest
 */
final class WebsocketEndpointConfigRequest extends \InfobipSDK\DTOs\N58f57942de1c194257c321b1824e5d3941d9e9f538a9f08ddcb73e6025439f43\MediaStreamConfigRequest
{
    public const array REQUIRED_FIELDS = [
        'name',
        'type',
        'url',
    ];

    protected const array VALIDATION = [
        'name' => [
            'minLength' => 0,
            'maxLength' => 128,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Audio sampling rate.
     */
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\WebsocketEndpointConfigRequest\SampleRateEnum $sampleRate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'sampleRate' => is_string($value) ? $this->sampleRate = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\WebsocketEndpointConfigRequest\SampleRateEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
