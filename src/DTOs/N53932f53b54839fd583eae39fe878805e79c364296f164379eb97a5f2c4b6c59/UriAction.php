<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * UriAction
 */
final class UriAction extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Action
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'label' => [
        'minLength' => 0,
        'maxLength' => 20,
    ],
    'uri' => [
        'minLength' => 0,
        'maxLength' => 1000,
        'pattern' => 'http(s)?://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?|^tel:(\\+)?(\\d)+(\\-\\d+)*$|line?://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\AltUri $altUri;
    /**
     * Label for the action button.
     * Example: "View details"
     */
    public string $label {
        set {
            $this->assigning('label', $value);
            $this->label = $value;
        }
    }
    /**
     * URI opened when the action is tapped.
     * Example: "https://example.com"
     */
    public string $uri {
        set {
            $this->assigning('uri', $value);
            $this->uri = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'altUri' => $value instanceof \stdClass ? $this->altUri = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\AltUri($value) : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'uri' => is_string($value) ? $this->uri = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
