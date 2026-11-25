<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * Phone
 *
 * Phone information.
 */
final class Phone extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
        'phone',
        'type',
        'waId',
    ];

    /**
     * Phone of  contact.
     */
    public string $phone;
    /**
     * Type of a phone. Can be CELL, MAIN, IPHONE, HOME, WORK.
     */
    public string $type;
    /**
     * WhatsApp ID.
     */
    public string $waId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'waId' => is_string($value) ? $this->waId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
