<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * Context
 *
 * Information about the message to which the end user responded.
 */
final class Context extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
        'from',
        'id',
    ];

    /**
     * End user's phone number.
     */
    public string $from;
    /**
     * MessageId of the message to which the end user responded.
     */
    public string $id;
    public \InfobipSDK\DTOs\N033803db88cada38464c4e86c919c67cee20aa369072ec632b1c62ea0cc27514\ReferredProduct $referredProduct;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'referredProduct' => $value instanceof \stdClass ? $this->referredProduct = new \InfobipSDK\DTOs\N033803db88cada38464c4e86c919c67cee20aa369072ec632b1c62ea0cc27514\ReferredProduct($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
