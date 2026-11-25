<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

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
     * Used when specifying an application in outbound send requests. It is also returned in notification events. For detailed usage, refer to the [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
     */
    public string $applicationId {
        set {
            $this->assigning('applicationId', $value);
            $this->applicationId = $value;
        }
    }
    /**
     * Used when specifying an entity in outbound send requests. It is also returned in notification events. For detailed usage, refer to the [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
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
