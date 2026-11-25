<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b;

/**
 * Entity
 */
final class Entity extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'entityId',
    ];

    protected const array VALIDATION = [
        'entityId' => [
            'maxLength' => 255,
        ],
        'entityName' => [
            'maxLength' => 255,
        ],
    ];

    /**
     * The unique identifier of the entity. This ID will be a URL path parameter. We recommend using values that do not need URL encoding for easier interaction with other API endpoints.
     * Example: "test-entity"
     */
    public string $entityId {
        set {
            $this->assigning('entityId', $value);
            $this->entityId = $value;
        }
    }
    /**
     * Descriptive name of the resource.
     * Example: "Test name"
     */
    public string $entityName {
        set {
            $this->assigning('entityName', $value);
            $this->entityName = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'entityName' => is_string($value) ? $this->entityName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
