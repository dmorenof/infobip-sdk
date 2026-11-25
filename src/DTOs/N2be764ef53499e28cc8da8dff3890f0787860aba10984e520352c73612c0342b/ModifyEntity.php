<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b;

/**
 * ModifyEntity
 */
final class ModifyEntity extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'entityName' => [
        'maxLength' => 255,
    ],
];

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
            'entityName' => is_string($value) ? $this->entityName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
