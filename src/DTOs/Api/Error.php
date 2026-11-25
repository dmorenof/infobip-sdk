<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Api;

/**
 * ApiError
 */
final class Error extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'action',
        'description',
        'errorCode',
        'resources',
        'violations',
    ];

    protected const array VALIDATION = [
        'action' => [
            'minLength' => 1,
        ],
        'description' => [
            'minLength' => 1,
        ],
        'errorCode' => [
            'minLength' => 1,
        ],
    ];

    /**
     * An action that should be taken to recover from the error.
     */
    public string $action {
        set {
            $this->assigning('action', $value);
            $this->action = $value;
        }
    }
    /**
     * A detailed description of an error.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * An error code uniquely identifying the error case.
     */
    public string $errorCode {
        set {
            $this->assigning('errorCode', $value);
            $this->errorCode = $value;
        }
    }
    /**
     * List of available resources to recover from the error.
     */
    public \InfobipSDK\Collections\Api\Error\ResourcesCollection $resources;
    /**
     * List of violations that caused the error.
     */
    public \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\ValidationBadResponse\SkippableViolationsCollection $violations;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'errorCode' => is_string($value) ? $this->errorCode = $value : parent::assignMember($name, $value),
            'resources' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->resources = new \InfobipSDK\Collections\Api\Error\ResourcesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Api\ErrorResource::class)) : parent::assignMember($name, $value),
            'violations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->violations = new \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\ValidationBadResponse\SkippableViolationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Api\ErrorViolation::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
