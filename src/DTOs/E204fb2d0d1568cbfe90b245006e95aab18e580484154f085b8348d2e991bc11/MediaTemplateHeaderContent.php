<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * MediaTemplateHeaderContent
 *
 * Media template header. Required for media templates which contain headers
 */
final class MediaTemplateHeaderContent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'documentUrl' => [
            'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
        ],
        'imageUrl' => [
            'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
        ],
        'videoUrl' => [
            'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'documentFilename',
        'documentUrl',
        'imageUrl',
        'latitude',
        'longitude',
        'textPlaceholder',
        'videoUrl',
    ];

    /**
     * Document name. Required for templates that contain a document header.
     */
    public string $documentFilename;
    /**
     * Document URL. Required for templates that contain a document header.Supported document types are PDF, DOC(X), PPT(X), XLS(X). Maximum document size is 100MB.
     */
    public string $documentUrl {
        set {
            $this->assigning('documentUrl', $value);
            $this->documentUrl = $value;
        }
    }
    /**
     * Image URL. Required for templates that contain an image header. Supported image types: JPG, JPEG, PNG. Maximum image size is 5MB.
     */
    public string $imageUrl {
        set {
            $this->assigning('imageUrl', $value);
            $this->imageUrl = $value;
        }
    }
    /**
     * Location latitude. The value must be between -90 and 90. Required for templates that contain a location header.
     * Format: double
     */
    public float $latitude;
    /**
     * Location longitude. The value must be between -180 and 180. Required for templates that contain a location header.
     * Format: double
     */
    public float $longitude;
    /**
     * Text placeholder. Required for templates that contain a text header.
     */
    public string $textPlaceholder;
    /**
     * Video URL. Required for templates that contain a video header. Supported video types are MP4, 3GPP. Maximum video size is 16MB.
     */
    public string $videoUrl {
        set {
            $this->assigning('videoUrl', $value);
            $this->videoUrl = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'documentFilename' => is_string($value) ? $this->documentFilename = $value : parent::assignMember($name, $value),
            'documentUrl' => is_string($value) ? $this->documentUrl = $value : parent::assignMember($name, $value),
            'imageUrl' => is_string($value) ? $this->imageUrl = $value : parent::assignMember($name, $value),
            'latitude' => is_float($value) ? $this->latitude = $value : parent::assignMember($name, $value),
            'longitude' => is_float($value) ? $this->longitude = $value : parent::assignMember($name, $value),
            'textPlaceholder' => is_string($value) ? $this->textPlaceholder = $value : parent::assignMember($name, $value),
            'videoUrl' => is_string($value) ? $this->videoUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
