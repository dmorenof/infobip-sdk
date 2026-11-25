<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * CreateRcsTestNumberApiRequest
 */
final class CreateRcsTestNumberApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'testNumber',
    ];

    protected const array VALIDATION = [
        'testNumber' => [
            'pattern' => '^\\+?[1-9]\\d{1,14}$',
        ],
    ];

    /**
     * Set this test number as primary for this sender. A test number can only be primary for one sender, although a sender may have multiple numbers marked as primary; selecting it here will remove the primary flag from any sender where it is already marked as such. Relevant when multiple senders share the same Application and Entity via Resource Association.
     */
    public bool $primary;
    /**
     * Full number in E.164 format, e.g. +1234567890. Leading '+' is optional.
     */
    public string $testNumber {
        set {
            $this->assigning('testNumber', $value);
            $this->testNumber = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'primary' => is_bool($value) ? $this->primary = $value : parent::assignMember($name, $value),
            'testNumber' => is_string($value) ? $this->testNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
