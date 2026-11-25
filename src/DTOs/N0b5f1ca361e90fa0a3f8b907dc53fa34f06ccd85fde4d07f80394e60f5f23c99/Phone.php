<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * Phone
 */
final class Phone extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'phone',
    'type',
    'waId',
];

    /**
     * Contact phone number.
     */
    public string $phone;
    /**
     * Type of a phone.
     */
    public \InfobipSDK\Enums\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Phone\TypeEnum $type;
    /**
     * WhatsApp ID.
     */
    public string $waId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Phone\TypeEnum::from($value) : parent::assignMember($name, $value),
            'waId' => is_string($value) ? $this->waId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
