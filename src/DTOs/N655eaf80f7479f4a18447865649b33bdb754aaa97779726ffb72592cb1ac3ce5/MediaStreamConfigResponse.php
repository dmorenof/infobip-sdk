<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N655eaf80f7479f4a18447865649b33bdb754aaa97779726ffb72592cb1ac3ce5;

/**
 * MediaStreamConfigResponse
 */
class MediaStreamConfigResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.MediaStreamingConfigResponse' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MediaStreamingConfigResponse',
        '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.WebsocketEndpointConfigResponse' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\WebsocketEndpointConfigResponse',
        'MEDIA_STREAMING' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MediaStreamingConfigResponse',
        'WEBSOCKET_ENDPOINT' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\WebsocketEndpointConfigResponse',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Media-stream configuration ID.
     */
    public string $id;
    /**
     * Media-stream configuration name.
     */
    public string $name;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ResponseMediaStreamConfigType $type;
    /**
     * Destination websocket or load balancer URL.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ResponseMediaStreamConfigType::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
