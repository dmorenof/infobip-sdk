<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * PlatformParameters
 *
 * Platform parameters that would be associated with the sender. Please note that platform parameters must be created before they can be associated with the sender. For more details, see [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
 */
final class PlatformParameters extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'applicationId' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
        'entityId' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
    ];

    /**
     * ID of the Application that would be associated with the sender.
     */
    public string $applicationId {
        set {
            $this->assigning('applicationId', $value);
            $this->applicationId = $value;
        }
    }
    /**
     * ID of the Entity that would be associated with the sender.
     */
    public string $entityId {
        set {
            $this->assigning('entityId', $value);
            $this->entityId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
