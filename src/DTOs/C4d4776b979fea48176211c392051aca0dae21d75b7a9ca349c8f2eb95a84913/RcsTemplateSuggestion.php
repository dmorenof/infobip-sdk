<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * RcsTemplateSuggestion
 */
class RcsTemplateSuggestion extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    'CREATE_CALENDAR_EVENT' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateCreateCalendarEventSuggestion',
    'DIAL_PHONE' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateDialPhoneSuggestion',
    'OPEN_URL' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateOpenUrlSuggestion',
    'REPLY' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateReplySuggestion',
    'REQUEST_LOCATION' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateRequestLocationSuggestion',
    'SHOW_LOCATION' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateShowLocationSuggestion',
    'c4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913.RcsTemplateCreateCalendarEventSuggestion' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateCreateCalendarEventSuggestion',
    'c4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913.RcsTemplateDialPhoneSuggestion' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateDialPhoneSuggestion',
    'c4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913.RcsTemplateOpenUrlSuggestion' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateOpenUrlSuggestion',
    'c4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913.RcsTemplateReplySuggestion' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateReplySuggestion',
    'c4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913.RcsTemplateRequestLocationSuggestion' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateRequestLocationSuggestion',
    'c4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913.RcsTemplateShowLocationSuggestion' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateShowLocationSuggestion',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateSuggestionType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateSuggestionType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
