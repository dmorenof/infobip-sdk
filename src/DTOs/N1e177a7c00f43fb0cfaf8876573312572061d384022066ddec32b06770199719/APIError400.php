<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719;

/**
 * APIError400
 */
final class APIError400 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'action',
        'description',
        'errorCode',
        'violations',
    ];

    /**
     * Action that should be taken to recover from the error.
     */
    public string $action;
    /**
     * Detailed description of an error.
     */
    public string $description;
    /**
     * Error code uniquely identifying the error case.
     */
    public string $errorCode;
    /**
     * List of available resources to recover from the error.
     */
    public \InfobipSDK\Collections\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\APIError400\ResourcesCollection $resources;
    /**
     * List of violations that caused the error.
     */
    public \InfobipSDK\Collections\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\APIError400\ViolationsCollection $violations;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'errorCode' => is_string($value) ? $this->errorCode = $value : parent::assignMember($name, $value),
            'resources' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->resources = new \InfobipSDK\Collections\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\APIError400\ResourcesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\APIErrorResources::class)) : parent::assignMember($name, $value),
            'violations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->violations = new \InfobipSDK\Collections\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\APIError400\ViolationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\APIErrorViolations::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
