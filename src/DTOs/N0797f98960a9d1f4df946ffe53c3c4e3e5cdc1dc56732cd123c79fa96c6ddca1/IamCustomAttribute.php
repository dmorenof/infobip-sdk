<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0797f98960a9d1f4df946ffe53c3c4e3e5cdc1dc56732cd123c79fa96c6ddca1;

/**
 * IamCustomAttribute
 */
final class IamCustomAttribute extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'description' => [
        'minLength' => 0,
        'maxLength' => 2048,
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'createdAt',
    'modifiedAt',
];

    /**
     * Date and time of creation. Has the following format: yyyy-MM-dd'T'HH:mm:ss.
     */
    public string $createdAt;
    /**
     * Custom attribute type.
     */
    public \InfobipSDK\Enums\N9a0795f64a40f2cbc302ee52c186009a1de422921e2055e9284671cdc2107f5b\IamAdditionalFieldDataType $dataType;
    /**
     * Optional description of the custom attribute, 2048 characters max.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Date and time of last modification. Has the following format: yyyy-MM-dd'T'HH:mm:ss.
     */
    public string $modifiedAt;
    /**
     * Custom attribute name, 256 characters max. Invalid characters: `{}[]`.
     */
    public string $name;
    /**
     * Object schema for `LIST_OF_OBJECTS` type. Defines the shape of the list items.
     */
    public \InfobipSDK\DTOs\N0797f98960a9d1f4df946ffe53c3c4e3e5cdc1dc56732cd123c79fa96c6ddca1\IamCustomAttribute\ObjectSchemaMap $objectSchema;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'dataType' => is_string($value) ? $this->dataType = \InfobipSDK\Enums\N9a0795f64a40f2cbc302ee52c186009a1de422921e2055e9284671cdc2107f5b\IamAdditionalFieldDataType::from($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'modifiedAt' => is_string($value) ? $this->modifiedAt = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
