<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * FormSelectionInboundContent
 *
 * Forms containing user responses.
 */
class FormSelectionInboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14.DatePickerSelectionInboundContent' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\DatePickerSelectionInboundContent',
        '91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14.InputSelectionInboundContent' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\InputSelectionInboundContent',
        '91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14.MultiSelectSelectionInboundContent' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\MultiSelectSelectionInboundContent',
        '91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14.PickerSelectionInboundContent' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\PickerSelectionInboundContent',
        '91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14.SelectSelectionInboundContent' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\SelectSelectionInboundContent',
        'DATE_PICKER' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\DatePickerSelectionInboundContent',
        'INPUT' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\InputSelectionInboundContent',
        'MULTI_SELECT' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\MultiSelectSelectionInboundContent',
        'PICKER' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\PickerSelectionInboundContent',
        'SELECT' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\SelectSelectionInboundContent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\FormSelectionInboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\FormSelectionInboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
