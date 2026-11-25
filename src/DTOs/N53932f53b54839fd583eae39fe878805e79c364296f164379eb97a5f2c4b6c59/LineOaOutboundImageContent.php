<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineOaOutboundImageContent
 */
final class LineOaOutboundImageContent extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaOutboundContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'thumbnailUrl' => [
        'minLength' => 0,
        'maxLength' => 1000,
    ],
    'url' => [
        'minLength' => 0,
        'maxLength' => 1000,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * URL of the preview image shown in the chat. Must be a publicly reachable HTTPS URL. Maximum image size is 1 MB.
     * Example: "https://example.com/thumbnail.png"
     */
    public string $thumbnailUrl {
        set {
            $this->assigning('thumbnailUrl', $value);
            $this->thumbnailUrl = $value;
        }
    }
    /**
     * URL of the original image. Must be a publicly reachable HTTPS URL. Maximum image size is 10 MB.
     * Example: "https://example.com/image.png"
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'thumbnailUrl' => is_string($value) ? $this->thumbnailUrl = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
