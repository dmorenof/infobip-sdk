<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * UpdateRcsTestNumberPrimaryApiRequest
 */
final class UpdateRcsTestNumberPrimaryApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'primary',
    ];

    /**
     * Set this test number as primary for this sender. A test number can only be primary for one sender, although a sender may have multiple numbers marked as primary; selecting it here will remove the primary flag from any sender where it is already marked as such. Relevant when multiple senders share the same Application and Entity via Resource Association.
     */
    public bool $primary;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'primary' => is_bool($value) ? $this->primary = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
