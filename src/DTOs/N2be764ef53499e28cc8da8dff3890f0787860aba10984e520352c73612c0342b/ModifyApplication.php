<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b;

/**
 * ModifyApplication
 */
final class ModifyApplication extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'applicationName' => [
            'maxLength' => 255,
        ],
    ];

    /**
     * Descriptive name of the resource.
     * Example: "Test name"
     */
    public string $applicationName {
        set {
            $this->assigning('applicationName', $value);
            $this->applicationName = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationName' => is_string($value) ? $this->applicationName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
