<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * SelectPageItem
 *
 * An array of objects defining the user experience.
 */
final class SelectPageItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'identifier',
    'title',
    'value',
];

    protected const array VALIDATION = [
    'identifier' => [
        'minLength' => 1,
    ],
    'nextPageIdentifier' => [
        'minLength' => 0,
        'maxLength' => 20,
    ],
    'title' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
    'value' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
];

    /**
     * Unique identifier of the item.
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
     * Identifier of the next page. Set this value only when multipleSelection is not defined or set to false.
     */
    public string $nextPageIdentifier {
        set {
            $this->assigning('nextPageIdentifier', $value);
            $this->nextPageIdentifier = $value;
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
    /**
     * Value of the item itself.
     */
    public string $value {
        set {
            $this->assigning('value', $value);
            $this->value = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'identifier' => is_string($value) ? $this->identifier = $value : parent::assignMember($name, $value),
            'imageIdentifier' => is_string($value) ? $this->imageIdentifier = $value : parent::assignMember($name, $value),
            'nextPageIdentifier' => is_string($value) ? $this->nextPageIdentifier = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
