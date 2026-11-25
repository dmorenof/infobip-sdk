<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * MultiSelectSelectionInboundContent
 */
final class MultiSelectSelectionInboundContent extends \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\FormSelectionInboundContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'items' => [
        'minItems' => 1,
        'maxItems' => 2147483647,
    ],
    'pageIdentifier' => [
        'minLength' => 0,
        'maxLength' => 20,
    ],
    'subtitle' => [
        'minLength' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Returned items.
     */
    public \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\MultiSelectSelectionInboundContent\ItemsCollection $items {
        set {
            $this->assigning('items', $value);
            $this->items = $value;
        }
    }
    /**
     * Identifier of returned page.
     */
    public string $pageIdentifier {
        set {
            $this->assigning('pageIdentifier', $value);
            $this->pageIdentifier = $value;
        }
    }
    /**
     * Subtitle.
     */
    public string $subtitle {
        set {
            $this->assigning('subtitle', $value);
            $this->subtitle = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->items = new \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\MultiSelectSelectionInboundContent\ItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\FormSelectionItemInboundContent::class)) : parent::assignMember($name, $value),
            'pageIdentifier' => is_string($value) ? $this->pageIdentifier = $value : parent::assignMember($name, $value),
            'subtitle' => is_string($value) ? $this->subtitle = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
