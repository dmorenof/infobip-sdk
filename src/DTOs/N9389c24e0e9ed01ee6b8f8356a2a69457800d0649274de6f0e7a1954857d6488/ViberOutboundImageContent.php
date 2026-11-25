<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * ViberOutboundImageContent
 */
final class ViberOutboundImageContent extends \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberOutboundContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'imageAction' => [
            'minLength' => 0,
            'maxLength' => 1000,
        ],
        'mediaUrl' => [
            'minLength' => 0,
            'maxLength' => 1000,
            'pattern' => '',
        ],
        'text' => [
            'minLength' => 1,
            'maxLength' => 1000,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ButtonWithAction $button;
    /**
     * URL opened when the user taps the image. Only supported for image with text, optionally with a button, when `showImageInFullScreen` is `false`. Independent of the button `action` URL. If omitted, image taps use the button action.
     */
    public string $imageAction {
        set {
            $this->assigning('imageAction', $value);
            $this->imageAction = $value;
        }
    }
    public \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberImageFormat $imageFormat;
    /**
     * URL of the image being sent. Must be a valid URL starting with https:// or http://. Supported image types are .jpg, .jpeg, .png, .gif. Recommended resolution: 800 px x 800 px.
     */
    public string $mediaUrl {
        set {
            $this->assigning('mediaUrl', $value);
            $this->mediaUrl = $value;
        }
    }
    public \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberImageRatio $ratio;
    /**
     * Indicates whether the image is expandable. if set to `true`, the image opens in fullscreen, if set to `false`, tapping the image follows `imageAction` when provided, otherwise the button's URL.
     */
    public bool $showImageInFullScreen;
    /**
     * Text to be displayed alongside the image. It is required when sending a message with a button and an image.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'button' => $value instanceof \stdClass ? $this->button = new \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ButtonWithAction($value) : parent::assignMember($name, $value),
            'imageAction' => is_string($value) ? $this->imageAction = $value : parent::assignMember($name, $value),
            'imageFormat' => is_string($value) ? $this->imageFormat = \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberImageFormat::from($value) : parent::assignMember($name, $value),
            'mediaUrl' => is_string($value) ? $this->mediaUrl = $value : parent::assignMember($name, $value),
            'ratio' => is_string($value) ? $this->ratio = \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberImageRatio::from($value) : parent::assignMember($name, $value),
            'showImageInFullScreen' => is_bool($value) ? $this->showImageInFullScreen = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
