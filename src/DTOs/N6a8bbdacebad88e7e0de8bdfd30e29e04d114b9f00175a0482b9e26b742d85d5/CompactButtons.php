<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * CompactButtons
 *
 * Compact buttons component.
 */
final class CompactButtons extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'items',
];

    protected const array VALIDATION = [
    'items' => [
        'minItems' => 1,
        'maxItems' => 2,
    ],
];

    /**
     * List of buttons.
     */
    public \InfobipSDK\Collections\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\CompactButtons\ItemsCollection $items {
        set {
            $this->assigning('items', $value);
            $this->items = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->items = new \InfobipSDK\Collections\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\CompactButtons\ItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ButtonItem::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
