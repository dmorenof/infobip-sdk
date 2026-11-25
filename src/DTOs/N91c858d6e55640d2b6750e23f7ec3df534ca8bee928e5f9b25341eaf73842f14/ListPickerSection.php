<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * ListPickerSection
 *
 * An array of list picker sections.
 */
final class ListPickerSection extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'items',
        'title',
    ];

    protected const array VALIDATION = [
        'items' => [
            'minItems' => 1,
        ],
        'order' => [
            'minimum' => 0,
            'format' => 'int32',
        ],
        'title' => [
            'minLength' => 0,
            'maxLength' => 200,
        ],
    ];

    /**
     * An array of list picker items.
     */
    public \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\ListPickerSection\ItemsCollection $items {
        set {
            $this->assigning('items', $value);
            $this->items = $value;
        }
    }
    /**
     * A Boolean that indicates whether the customer can make multiple selections within the section.
     */
    public bool $multipleSelection;
    /**
     * An integer containing the ordinal in the sections array.
     * Format: int32
     */
    public int $order {
        set {
            $this->assigning('order', $value);
            $this->order = $value;
        }
    }
    /**
     * Title of the section.
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
            'items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->items = new \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\ListPickerSection\ItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\ListPickerItem::class)) : parent::assignMember($name, $value),
            'multipleSelection' => is_bool($value) ? $this->multipleSelection = $value : parent::assignMember($name, $value),
            'order' => is_int($value) ? $this->order = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
