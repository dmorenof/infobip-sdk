<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * Video
 *
 * Optional video played on top of the imagemap.
 */
final class Video extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'originalContentUrl' => [
            'minLength' => 0,
            'maxLength' => 1000,
        ],
        'previewImageUrl' => [
            'minLength' => 0,
            'maxLength' => 1000,
        ],
    ];

    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Area $area;
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ExternalLink $externalLink;
    /**
     * URL of the video file played on the imagemap. Required by LINE for the video to render.
     * Example: "https://example.com/imagemap-video.mp4"
     */
    public string $originalContentUrl {
        set {
            $this->assigning('originalContentUrl', $value);
            $this->originalContentUrl = $value;
        }
    }
    /**
     * URL of the preview image shown before the video plays. Required by LINE for the video to render.
     * Example: "https://example.com/imagemap-video-preview.jpg"
     */
    public string $previewImageUrl {
        set {
            $this->assigning('previewImageUrl', $value);
            $this->previewImageUrl = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'area' => $value instanceof \stdClass ? $this->area = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Area($value) : parent::assignMember($name, $value),
            'externalLink' => $value instanceof \stdClass ? $this->externalLink = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ExternalLink($value) : parent::assignMember($name, $value),
            'originalContentUrl' => is_string($value) ? $this->originalContentUrl = $value : parent::assignMember($name, $value),
            'previewImageUrl' => is_string($value) ? $this->previewImageUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
