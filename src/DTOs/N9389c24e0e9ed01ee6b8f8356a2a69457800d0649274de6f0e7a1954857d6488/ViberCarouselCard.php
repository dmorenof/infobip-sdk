<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * ViberCarouselCard
 *
 * An array of cards contained within the carousel.
 */
final class ViberCarouselCard extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'mediaUrl',
        'text',
    ];

    protected const array VALIDATION = [
        'buttons' => [
            'minItems' => 0,
            'maxItems' => 2,
        ],
        'mediaUrl' => [
            'minLength' => 0,
            'maxLength' => 1000,
            'pattern' => '',
        ],
        'text' => [
            'minLength' => 2,
            'maxLength' => 38,
        ],
    ];

    /**
     * List of buttons that will be sent in card.
     */
    public \InfobipSDK\Collections\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberCarouselCard\ButtonsCollection $buttons {
        set {
            $this->assigning('buttons', $value);
            $this->buttons = $value;
        }
    }
    /**
     * URL of the image being sent. Must be a valid URL starting with https:// or http://. Supported image types are .jpg, .jpeg, .png. Recommended resolution: 696 px x 600 px.
     */
    public string $mediaUrl {
        set {
            $this->assigning('mediaUrl', $value);
            $this->mediaUrl = $value;
        }
    }
    /**
     * Text to be displayed alongside the card.
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
            'buttons' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->buttons = new \InfobipSDK\Collections\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberCarouselCard\ButtonsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberCarouselButton::class)) : parent::assignMember($name, $value),
            'mediaUrl' => is_string($value) ? $this->mediaUrl = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
