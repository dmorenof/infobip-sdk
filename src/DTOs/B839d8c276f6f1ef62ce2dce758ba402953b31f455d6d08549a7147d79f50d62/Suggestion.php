<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * Suggestion
 *
 * List of suggestions
 */
class Suggestion extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    'CREATE_CALENDAR_EVENT' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\CreateCalendarEventSuggestion',
    'DIAL_PHONE' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\DialPhoneSuggestion',
    'OPEN_URL' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\OpenUrlSuggestion',
    'REPLY' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\ReplySuggestion',
    'REQUEST_LOCATION' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\RequestLocationSuggestion',
    'SHOW_LOCATION' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\ShowLocationSuggestion',
    'b839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62.CreateCalendarEventSuggestion' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\CreateCalendarEventSuggestion',
    'b839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62.DialPhoneSuggestion' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\DialPhoneSuggestion',
    'b839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62.OpenUrlSuggestion' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\OpenUrlSuggestion',
    'b839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62.ReplySuggestion' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\ReplySuggestion',
    'b839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62.RequestLocationSuggestion' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\RequestLocationSuggestion',
    'b839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62.ShowLocationSuggestion' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\ShowLocationSuggestion',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\SuggestionType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\SuggestionType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
