<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * RcsTemplateOpenUrlSuggestion
 *
 * Opens the user's default web browser app to the specified URL.
 */
final class RcsTemplateOpenUrlSuggestion extends \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateSuggestion
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'postbackData' => [
        'minLength' => 1,
        'maxLength' => 2048,
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

    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\OpenUrlApplicationType $application;
    public string $postbackData {
        set {
            $this->assigning('postbackData', $value);
            $this->postbackData = $value;
        }
    }
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
    /**
     * URL that will be opened on a mobile phone when the suggestion is selected. Must be a valid URI using the http or https scheme as defined in RFC 3986.
     * Example: "https://www.infobip.com"
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }
    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\WebviewViewModeType $webviewViewMode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'application' => is_string($value) ? $this->application = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\OpenUrlApplicationType::from($value) : parent::assignMember($name, $value),
            'postbackData' => is_string($value) ? $this->postbackData = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'webviewViewMode' => is_string($value) ? $this->webviewViewMode = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\WebviewViewModeType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
