<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineOaOutboundImagemapContent
 */
final class LineOaOutboundImagemapContent extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaOutboundContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'actions' => [
            'minItems' => 1,
            'maxItems' => 50,
        ],
        'altText' => [
            'minLength' => 0,
            'maxLength' => 400,
        ],
        'baseUrl' => [
            'minLength' => 0,
            'maxLength' => 1000,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Tappable actions defined over areas of the imagemap.
     */
    public \InfobipSDK\Collections\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaOutboundImagemapContent\ActionsCollection $actions {
        set {
            $this->assigning('actions', $value);
            $this->actions = $value;
        }
    }
    /**
     * Alternative text shown when the imagemap cannot be displayed.
     * Example: "This is an imagemap"
     */
    public string $altText {
        set {
            $this->assigning('altText', $value);
            $this->altText = $value;
        }
    }
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\BaseSize $baseSize;
    /**
     * Base URL of the imagemap image set. LINE appends path suffixes for different resolutions.
     * Example: "https://example.com/bot/images/rm001"
     */
    public string $baseUrl {
        set {
            $this->assigning('baseUrl', $value);
            $this->baseUrl = $value;
        }
    }
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Video $video;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'altText' => is_string($value) ? $this->altText = $value : parent::assignMember($name, $value),
            'baseSize' => $value instanceof \stdClass ? $this->baseSize = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\BaseSize($value) : parent::assignMember($name, $value),
            'baseUrl' => is_string($value) ? $this->baseUrl = $value : parent::assignMember($name, $value),
            'video' => $value instanceof \stdClass ? $this->video = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Video($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
