<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * ImageContent
 *
 * The content object to build a message that will be sent.
 */
final class ImageContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'mediaUrl',
    ];

    protected const array VALIDATION = [
        'mediaUrl' => [
            'minLength' => 1,
            'pattern' => '',
        ],
        'text' => [
            'minLength' => 1,
            'maxLength' => 1000,
        ],
    ];

    public \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ButtonWithAction $button;
    /**
     * URL of the image being sent. Must be a valid URL starting with https:// or http://. Supported image types are .jpg, .jpeg, .png.Recommended resolution: 800 px x 800 px.
     */
    public string $mediaUrl {
        set {
            $this->assigning('mediaUrl', $value);
            $this->mediaUrl = $value;
        }
    }
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
            'mediaUrl' => is_string($value) ? $this->mediaUrl = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
