<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * LineItem
 *
 * Total Values for all items.
 */
final class LineItem extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The monetary amount of the line item.
     */
    public string $amount;
    /**
     * A short, localized description of the line item.
     */
    public string $label;
    /**
     * A value that indicates whether the line item is final or pending.
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_string($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
