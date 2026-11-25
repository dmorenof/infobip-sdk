<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N58f57942de1c194257c321b1824e5d3941d9e9f538a9f08ddcb73e6025439f43;

/**
 * MediaStreamConfigRequest
 */
class MediaStreamConfigRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
    'type',
    'url',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.MediaStreamingConfigRequest' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MediaStreamingConfigRequest',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.WebsocketEndpointConfigRequest' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\WebsocketEndpointConfigRequest',
    'MEDIA_STREAMING' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MediaStreamingConfigRequest',
    'WEBSOCKET_ENDPOINT' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\WebsocketEndpointConfigRequest',
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
     * Media-stream configuration name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RequestMediaStreamConfigType $type;
    /**
     * Destination websocket or load balancer URL.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RequestMediaStreamConfigType::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
