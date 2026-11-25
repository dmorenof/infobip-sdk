<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

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
    public \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\RecipientType $recipientType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brandCode' => is_int($value) ? $this->brandCode = $value : parent::assignMember($name, $value),
            'recipientType' => is_string($value) ? $this->recipientType = \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\RecipientType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
