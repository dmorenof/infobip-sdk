<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c;

/**
 * CreateFactApiRequest
 *
 * Request to create a fact definition.
 */
final class CreateFactApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'description',
        'name',
        'valueType',
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
     * Human-readable description of the fact.
     * Example: "Customer's preferred communication language."
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Fact name. Must be unique within the account.
     * Example: "preferred_language"
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \InfobipSDK\Enums\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\ApiFactValueType $valueType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'valueType' => is_string($value) ? $this->valueType = \InfobipSDK\Enums\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\ApiFactValueType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
