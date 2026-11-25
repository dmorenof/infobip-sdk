<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * Platform
 *
 * Platform options. For more details, see [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
 */
final class Platform extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'applicationId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'entityId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
];

    /**
     * Required for application use in a send request for outbound traffic. Returned in notification events. For more details, see [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
     */
    public string $applicationId {
        set {
            $this->assigning('applicationId', $value);
            $this->applicationId = $value;
        }
    }
    /**
     * Required to use entity in a send request for outbound traffic. Returned in notification events. For more details, see [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
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
