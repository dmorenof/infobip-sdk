<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * ZaloOutboundGifContent
 */
final class ZaloOutboundGifContent extends \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloOutboundContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'caption' => [
        'minLength' => 0,
        'maxLength' => 2000,
    ],
    'height' => [
        'format' => 'int32',
    ],
    'url' => [
        'minLength' => 1,
        'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
    ],
    'width' => [
        'format' => 'int32',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Gif title.
     */
    public string $caption {
        set {
            $this->assigning('caption', $value);
            $this->caption = $value;
        }
    }
    /**
     * Height of the GIF in pixels.
     * Format: int32
     */
    public int $height {
        set {
            $this->assigning('height', $value);
            $this->height = $value;
        }
    }
    /**
     * URL of the GIF. Maximum size: 1 MB.
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }
    /**
     * Width of the GIF in pixels.
     * Format: int32
     */
    public int $width {
        set {
            $this->assigning('width', $value);
            $this->width = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'caption' => is_string($value) ? $this->caption = $value : parent::assignMember($name, $value),
            'height' => is_int($value) ? $this->height = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'width' => is_int($value) ? $this->width = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
