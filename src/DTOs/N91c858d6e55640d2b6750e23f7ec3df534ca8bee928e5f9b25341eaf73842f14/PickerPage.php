<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * PickerPage
 */
final class PickerPage extends \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\FormPage
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'items' => [
            'minItems' => 1,
        ],
        'nextPageIdentifier' => [
            'minLength' => 0,
            'maxLength' => 20,
        ],
        'pageIdentifier' => [
            'minLength' => 0,
            'maxLength' => 20,
        ],
        'pickerTitle' => [
            'minLength' => 0,
            'maxLength' => 200,
        ],
        'selectedItemIndex' => [
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

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * An array of objects defining the user experience.
     */
    public \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\PickerPage\ItemsCollection $items {
        set {
            $this->assigning('items', $value);
            $this->items = $value;
        }
    }
    /**
     * Identifier of the next page. If not set, the client assumes the current page to be the final page.
     */
    public string $nextPageIdentifier {
        set {
            $this->assigning('nextPageIdentifier', $value);
            $this->nextPageIdentifier = $value;
        }
    }
    /**
     * Unique identifier of the page.
     */
    public string $pageIdentifier {
        set {
            $this->assigning('pageIdentifier', $value);
            $this->pageIdentifier = $value;
        }
    }
    /**
     * Text shown next to the picker text field.
     */
    public string $pickerTitle {
        set {
            $this->assigning('pickerTitle', $value);
            $this->pickerTitle = $value;
        }
    }
    /**
     * A zero-indexed number identifying the item in the picker wheel should be selected by default.
     * Format: int32
     */
    public int $selectedItemIndex {
        set {
            $this->assigning('selectedItemIndex', $value);
            $this->selectedItemIndex = $value;
        }
    }
    /**
     * Placed on the pages to denote the end page of the form. Can be set on multiple pages.
     */
    public bool $submitForm;
    /**
     * Question of the page.
     */
    public string $subtitle {
        set {
            $this->assigning('subtitle', $value);
            $this->subtitle = $value;
        }
    }
    /**
     * Title of the page.
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
            'items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->items = new \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\PickerPage\ItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\PickerPageItem::class)) : parent::assignMember($name, $value),
            'nextPageIdentifier' => is_string($value) ? $this->nextPageIdentifier = $value : parent::assignMember($name, $value),
            'pageIdentifier' => is_string($value) ? $this->pageIdentifier = $value : parent::assignMember($name, $value),
            'pickerTitle' => is_string($value) ? $this->pickerTitle = $value : parent::assignMember($name, $value),
            'selectedItemIndex' => is_int($value) ? $this->selectedItemIndex = $value : parent::assignMember($name, $value),
            'submitForm' => is_bool($value) ? $this->submitForm = $value : parent::assignMember($name, $value),
            'subtitle' => is_string($value) ? $this->subtitle = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
