<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * CopyCodeDefaultButtonApiData
 */
final class CopyCodeDefaultButtonApiData extends \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\ButtonApiData
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'example' => [
            'minLength' => 1,
            'maxLength' => 20,
            'pattern' => '^[a-z0-9]*$',
        ],
        'text' => [
            'minLength' => 0,
            'maxLength' => 25,
        ],
    ];

    protected const array READ_ONLY_FIELDS = [
        'text',
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'example',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * An example of a copy code.
     */
    public string $example {
        set {
            $this->assigning('example', $value);
            $this->example = $value;
        }
    }
    /**
     * Button text.
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
