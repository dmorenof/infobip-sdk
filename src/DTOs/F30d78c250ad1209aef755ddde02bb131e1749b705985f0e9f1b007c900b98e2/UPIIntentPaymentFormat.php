<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * UPIIntentPaymentFormat
 *
 * Format of the payment.
 */
class UPIIntentPaymentFormat extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    'LINK' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\UPIIntentPaymentLinkFormat',
    'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.UPIIntentPaymentLinkFormat' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\UPIIntentPaymentLinkFormat',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\UPIIntentPaymentFormatType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\UPIIntentPaymentFormatType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
