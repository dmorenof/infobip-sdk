<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * FormPage
 *
 * An array of different pages to be shown in the form.
 */
class FormPage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14.DatePickerPage' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\DatePickerPage',
    '91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14.InputPage' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\InputPage',
    '91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14.PickerPage' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\PickerPage',
    '91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14.SelectPage' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\SelectPage',
    'DATE_PICKER' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\DatePickerPage',
    'INPUT' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\InputPage',
    'PICKER' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\PickerPage',
    'SELECT' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\SelectPage',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\FormPageType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\FormPageType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
