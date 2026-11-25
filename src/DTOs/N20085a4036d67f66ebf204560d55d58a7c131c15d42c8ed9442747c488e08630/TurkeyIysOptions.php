<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

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
    public \InfobipSDK\Enums\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\RecipientType $recipientType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brandCode' => is_int($value) ? $this->brandCode = $value : parent::assignMember($name, $value),
            'recipientType' => is_string($value) ? $this->recipientType = \InfobipSDK\Enums\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\RecipientType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
