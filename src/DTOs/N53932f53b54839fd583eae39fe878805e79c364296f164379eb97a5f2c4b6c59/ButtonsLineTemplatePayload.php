<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * ButtonsLineTemplatePayload
 */
final class ButtonsLineTemplatePayload extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineTemplatePayload
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'actions' => [
            'minItems' => 1,
            'maxItems' => 4,
        ],
        'imageBackgroundColor' => [
            'pattern' => '^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$',
        ],
        'text' => [
            'minLength' => 0,
            'maxLength' => 160,
        ],
        'thumbnailImageUrl' => [
            'minLength' => 0,
            'maxLength' => 1000,
        ],
        'title' => [
            'minLength' => 0,
            'maxLength' => 40,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Action buttons shown in the template.
     */
    public \InfobipSDK\Collections\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ButtonsLineTemplatePayload\ActionsCollection $actions {
        set {
            $this->assigning('actions', $value);
            $this->actions = $value;
        }
    }
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Action $defaultAction;
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\AspectRatio $imageAspectRatio;
    /**
     * Background color of the thumbnail image as a hex color.
     * Example: "#FFFFFF"
     */
    public string $imageBackgroundColor {
        set {
            $this->assigning('imageBackgroundColor', $value);
            $this->imageBackgroundColor = $value;
        }
    }
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ImageSize $imageSize;
    /**
     * Message text displayed in the template.
     * Example: "Check out our latest products."
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
    /**
     * URL of the thumbnail image at the top of the buttons template.
     * Example: "https://example.com/template-thumb.jpg"
     */
    public string $thumbnailImageUrl {
        set {
            $this->assigning('thumbnailImageUrl', $value);
            $this->thumbnailImageUrl = $value;
        }
    }
    /**
     * Title displayed in the template.
     * Example: "Special offer"
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'imageAspectRatio' => is_string($value) ? $this->imageAspectRatio = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\AspectRatio::from($value) : parent::assignMember($name, $value),
            'imageBackgroundColor' => is_string($value) ? $this->imageBackgroundColor = $value : parent::assignMember($name, $value),
            'imageSize' => is_string($value) ? $this->imageSize = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ImageSize::from($value) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'thumbnailImageUrl' => is_string($value) ? $this->thumbnailImageUrl = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
