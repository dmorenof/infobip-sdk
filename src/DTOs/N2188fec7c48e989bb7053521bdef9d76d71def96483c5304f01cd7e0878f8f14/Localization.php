<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * Localization
 *
 * If the localization object is not defined, English will be used. If the localization type is set to PRESET, the language code is mandatory to be defined to one of the predefined values.If the localization type is set to BROWSER_DETECTED and the browser language is one of the languages that could be set in PRESET type, then that language will be used. Otherwise, English will be used.
 */
class Localization extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14.BrowserDetectedLocalization' => 'InfobipSDK\\DTOs\\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\\BrowserDetectedLocalization',
    '2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14.PresetLocalization' => 'InfobipSDK\\DTOs\\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\\PresetLocalization',
    'BROWSER_DETECTED' => 'InfobipSDK\\DTOs\\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\\BrowserDetectedLocalization',
    'PRESET' => 'InfobipSDK\\DTOs\\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\\PresetLocalization',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\LocalizationType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\LocalizationType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
