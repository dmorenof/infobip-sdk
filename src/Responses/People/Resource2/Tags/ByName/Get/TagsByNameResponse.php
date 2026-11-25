<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\People\Resource2\Tags\ByName\Get;

final class TagsByNameResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'description' => [
        'minLength' => 0,
        'maxLength' => 2048,
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'createdAt',
    'id',
    'modifiedAt',
];

    /**
     * Date and time of creation. Has the following format: yyyy-MM-dd'T'HH:mm:ss.
     */
    public string $createdAt;
    /**
     * Optional description of the tag, 2048 characters max.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Unique id of the entity.
     * Format: int64
     */
    public int $id;
    /**
     * Date and time of last modification. Has the following format: yyyy-MM-dd'T'HH:mm:ss.
     */
    public string $modifiedAt;
    /**
     * Tag name, 256 characters max.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'modifiedAt' => is_string($value) ? $this->modifiedAt = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
