<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * TextHeaderApiData
 */
final class TextHeaderApiData extends \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\HeaderApiData
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'example' => [
        'minLength' => 1,
    ],
    'text' => [
        'minLength' => 1,
    ],
];

    protected const array WRITE_ONLY_FIELDS = [
    'example',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * An example of the content for the template header a user could use. Cannot contain placeholders.
     */
    public string $example {
        set {
            $this->assigning('example', $value);
            $this->example = $value;
        }
    }
    /**
     * Template header text. Can contain up to 60 characters, with one placeholder {{1}}.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'example' => is_string($value) ? $this->example = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
