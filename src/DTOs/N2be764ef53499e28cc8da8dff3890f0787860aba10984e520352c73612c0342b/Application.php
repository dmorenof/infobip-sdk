<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b;

/**
 * Application
 */
final class Application extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'applicationId',
    ];

    protected const array VALIDATION = [
        'applicationId' => [
            'maxLength' => 255,
        ],
        'applicationName' => [
            'maxLength' => 255,
        ],
    ];

    /**
     * The unique identifier of the application. This ID will be a URL path parameter. We recommend using values that do not need URL encoding for easier interaction with other API endpoints.
     * Example: "test-application"
     */
    public string $applicationId {
        set {
            $this->assigning('applicationId', $value);
            $this->applicationId = $value;
        }
    }
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
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'applicationName' => is_string($value) ? $this->applicationName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
