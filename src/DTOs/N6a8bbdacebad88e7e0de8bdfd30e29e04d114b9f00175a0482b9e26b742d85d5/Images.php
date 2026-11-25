<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * Images
 *
 * Images component.
 */
final class Images extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'items' => [
        'minItems' => 1,
        'maxItems' => 3,
    ],
];

    /**
     * List of image attachments.
     */
    public \InfobipSDK\Collections\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\Images\ItemsCollection $items {
        set {
            $this->assigning('items', $value);
            $this->items = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->items = new \InfobipSDK\Collections\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\Images\ItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\Attachment::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
