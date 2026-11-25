<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c;

/**
 * UpdateFactApiRequest
 *
 * Request to update an existing fact definition's name and description. The value type is immutable after creation.
 */
final class UpdateFactApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'description',
        'name',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 500,
        ],
        'name' => [
            'maxLength' => 100,
        ],
    ];

    /**
     * New human-readable description of the fact.
     * Example: "ISO 639-1 code of the customer's preferred communication language."
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * New fact name. Must be unique within the account.
     * Example: "preferred_language"
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
