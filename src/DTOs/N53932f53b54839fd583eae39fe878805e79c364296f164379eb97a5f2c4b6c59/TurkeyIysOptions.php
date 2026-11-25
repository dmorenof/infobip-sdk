<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * TurkeyIysOptions
 *
 * IYS regulations specific parameters required for sending promotional SMS to phone numbers registered in Turkey.
 */
final class TurkeyIysOptions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'recipientType',
];

    protected const array VALIDATION = [
    'brandCode' => [
        'format' => 'int32',
    ],
];

    /**
     * Brand code is an ID of the company based on a company VAT number. If not provided in request, default value is used from your Infobip account.
     * Format: int32
     */
    public int $brandCode {
        set {
            $this->assigning('brandCode', $value);
            $this->brandCode = $value;
        }
    }
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\RecipientType $recipientType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brandCode' => is_int($value) ? $this->brandCode = $value : parent::assignMember($name, $value),
            'recipientType' => is_string($value) ? $this->recipientType = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\RecipientType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
