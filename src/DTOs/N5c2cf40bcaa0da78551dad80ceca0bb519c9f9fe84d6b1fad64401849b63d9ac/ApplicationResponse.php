<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N5c2cf40bcaa0da78551dad80ceca0bb519c9f9fe84d6b1fad64401849b63d9ac;

/**
 * ApplicationResponse
 */
final class ApplicationResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'apns',
    'applicationCode',
    'applicationId',
    'description',
    'gcm',
    'name',
    'registrationsCount',
];

    public \InfobipSDK\DTOs\Fc58971973975508c3c8fc4221c7201147a075acf31dce7331f3a874d9fc423d\ApnsData $apns;
    /**
     * Push application code.
     */
    public string $applicationCode;
    /**
     * Push application ID.
     */
    public string $applicationId;
    /**
     * Push application description.
     */
    public string $description;
    public \InfobipSDK\DTOs\Fc58971973975508c3c8fc4221c7201147a075acf31dce7331f3a874d9fc423d\GcmData $gcm;
    /**
     * Push application name.
     */
    public string $name;
    /**
     * Number of Push application registrations.
     * Format: int64
     */
    public int $registrationsCount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apns' => $value instanceof \stdClass ? $this->apns = new \InfobipSDK\DTOs\Fc58971973975508c3c8fc4221c7201147a075acf31dce7331f3a874d9fc423d\ApnsData($value) : parent::assignMember($name, $value),
            'applicationCode' => is_string($value) ? $this->applicationCode = $value : parent::assignMember($name, $value),
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'gcm' => $value instanceof \stdClass ? $this->gcm = new \InfobipSDK\DTOs\Fc58971973975508c3c8fc4221c7201147a075acf31dce7331f3a874d9fc423d\GcmData($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'registrationsCount' => is_int($value) ? $this->registrationsCount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
