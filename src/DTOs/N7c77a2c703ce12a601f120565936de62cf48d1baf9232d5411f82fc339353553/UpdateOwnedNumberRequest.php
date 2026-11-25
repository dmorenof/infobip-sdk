<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * UpdateOwnedNumberRequest
 */
final class UpdateOwnedNumberRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'applicationId',
];

    protected const array VALIDATION = [
    'applicationId' => [
        'minLength' => 1,
    ],
];

    /**
     * ID of the Application that would be associated with the number.
     * Documentation: https://www.infobip.com/docs/api/platform/application-entity
     */
    public string $applicationId {
        set {
            $this->assigning('applicationId', $value);
            $this->applicationId = $value;
        }
    }
    /**
     * ID of the Entity that would be associated with the number.
     * Documentation: https://www.infobip.com/docs/api/platform/application-entity
     */
    public string $entityId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
