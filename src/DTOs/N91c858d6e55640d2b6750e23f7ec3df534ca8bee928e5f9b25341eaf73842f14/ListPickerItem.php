<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * ListPickerItem
 *
 * An array of list picker items.
 */
final class ListPickerItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'identifier',
        'title',
    ];

    protected const array VALIDATION = [
        'identifier' => [
            'minLength' => 1,
        ],
        'order' => [
            'minimum' => 0,
            'format' => 'int32',
        ],
        'subtitle' => [
            'minLength' => 0,
            'maxLength' => 200,
        ],
        'title' => [
            'minLength' => 0,
            'maxLength' => 200,
        ],
    ];

    /**
     * Identifier of the item.
     */
    public string $identifier {
        set {
            $this->assigning('identifier', $value);
            $this->identifier = $value;
        }
    }
    /**
     * Identifier of the item's image.
     */
    public string $imageIdentifier;
    /**
     * An integer representing the ordinal position for the item. If this field is missing, the item isn't sorted within the items array.
     * Format: int32
     */
    public int $order {
        set {
            $this->assigning('order', $value);
            $this->order = $value;
        }
    }
    /**
     * Subtitle of the item.
     */
    public string $subtitle {
        set {
            $this->assigning('subtitle', $value);
            $this->subtitle = $value;
        }
    }
    /**
     * Title of the item.
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
            'identifier' => is_string($value) ? $this->identifier = $value : parent::assignMember($name, $value),
            'imageIdentifier' => is_string($value) ? $this->imageIdentifier = $value : parent::assignMember($name, $value),
            'order' => is_int($value) ? $this->order = $value : parent::assignMember($name, $value),
            'subtitle' => is_string($value) ? $this->subtitle = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
