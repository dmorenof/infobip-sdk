<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * SelectPage
 */
final class SelectPage extends \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\FormPage
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
    public \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\SelectPage\ItemsCollection $items {
        set {
            $this->assigning('items', $value);
            $this->items = $value;
        }
    }
    /**
     * Enables multiple selection for the page.
     */
    public bool $multipleSelection;
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
            'items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->items = new \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\SelectPage\ItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\SelectPageItem::class)) : parent::assignMember($name, $value),
            'multipleSelection' => is_bool($value) ? $this->multipleSelection = $value : parent::assignMember($name, $value),
            'nextPageIdentifier' => is_string($value) ? $this->nextPageIdentifier = $value : parent::assignMember($name, $value),
            'pageIdentifier' => is_string($value) ? $this->pageIdentifier = $value : parent::assignMember($name, $value),
            'submitForm' => is_bool($value) ? $this->submitForm = $value : parent::assignMember($name, $value),
            'subtitle' => is_string($value) ? $this->subtitle = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
