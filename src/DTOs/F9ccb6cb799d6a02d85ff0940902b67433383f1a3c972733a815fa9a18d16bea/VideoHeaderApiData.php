<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * VideoHeaderApiData
 */
final class VideoHeaderApiData extends \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\HeaderApiData
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'example' => [
            'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'example',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * An example of a template header video a user could use. Should be a valid URL that starts with `http` or `https`. Supported video type is `MP4`. Maximum video size is 16MB. Cannot contain placeholders.
     */
    public string $example {
        set {
            $this->assigning('example', $value);
            $this->example = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'example' => is_string($value) ? $this->example = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
