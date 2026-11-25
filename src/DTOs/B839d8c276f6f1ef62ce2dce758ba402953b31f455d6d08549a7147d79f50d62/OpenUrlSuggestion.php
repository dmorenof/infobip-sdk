<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * OpenUrlSuggestion
 *
 * Opens the user's default web browser app to the specified URL.
 */
final class OpenUrlSuggestion extends \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Suggestion
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'postbackData' => [
        'minLength' => 1,
        'maxLength' => 2024,
    ],
    'text' => [
        'minLength' => 1,
        'maxLength' => 25,
    ],
    'url' => [
        'minLength' => 1,
        'maxLength' => 2048,
        'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\OpenUrlApplicationType $application;
    /**
     * Value which is going to be sent as a reply to a suggestion.
     * Example: "REPLY"
     */
    public string $postbackData {
        set {
            $this->assigning('postbackData', $value);
            $this->postbackData = $value;
        }
    }
    /**
     * Suggestion text.
     * Example: "Pick one!"
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
    /**
     * URL that will be opened on a mobile phone when the suggestion is selected. Must be a valid URI using the http or https scheme as defined in RFC 3986. Other URI schemes are not supported.
     * Example: "https://www.infobip.com"
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }
    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\WebviewViewModeType $webviewViewMode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'application' => is_string($value) ? $this->application = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\OpenUrlApplicationType::from($value) : parent::assignMember($name, $value),
            'postbackData' => is_string($value) ? $this->postbackData = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'webviewViewMode' => is_string($value) ? $this->webviewViewMode = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\WebviewViewModeType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
