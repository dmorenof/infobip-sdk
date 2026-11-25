<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * TemplateProperty
 *
 * List of template properties.
 */
final class TemplateProperty extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'maxLength' => [
            'format' => 'int32',
        ],
        'minLength' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Indicates if the property value can be null.
     */
    public bool $acceptNull;
    /**
     * Maximum number of characters that the property value can have.
     * Format: int32
     */
    public int $maxLength {
        set {
            $this->assigning('maxLength', $value);
            $this->maxLength = $value;
        }
    }
    /**
     * Minimum number of characters that the property value can have.
     * Format: int32
     */
    public int $minLength {
        set {
            $this->assigning('minLength', $value);
            $this->minLength = $value;
        }
    }
    /**
     * Property name.
     */
    public string $name;
    /**
     * Indicates if the property is mandatory.
     */
    public bool $required;
    /**
     * Property type e.g. STRING.
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'acceptNull' => is_bool($value) ? $this->acceptNull = $value : parent::assignMember($name, $value),
            'maxLength' => is_int($value) ? $this->maxLength = $value : parent::assignMember($name, $value),
            'minLength' => is_int($value) ? $this->minLength = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'required' => is_bool($value) ? $this->required = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
