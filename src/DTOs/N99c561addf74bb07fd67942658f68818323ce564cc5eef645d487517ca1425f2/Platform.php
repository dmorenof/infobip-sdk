<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2;

/**
 * Platform
 *
 *
 * Specifies the platform object, which is a combination of an applicationId and entityId. These IDs uniquely identify each application and entity configured on the Infobip platform.
 *
 * Use this object and its related parameters to filter data for a specific application and entity combination. Note that these parameters should only be used if you leverage CPaaS X applications and entities to manage your traffic.
 *
 * For detailed information on applications and entities in the CPaaS X ecosystem, refer to the
 * [CPaaSX overview](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
 *
 */
final class Platform extends \Dmorenof\SdkRuntime\DTO
{
    /**
     *
     * A unique identifier assigned to an application, use case, or environment within the Infobip CPaaS X ecosystem.
     *
     * Use this parameter to filter data for a specific application.
     *
     * To retrieve all available application IDs, refer to the
     * [Application list endpoint](https://www.infobip.com/docs/api/platform/application-entity/get-applications).
     *
     * Example: "your_application_id"
     */
    public string $applicationId;
    /**
     *
     * A unique identifier assigned to an entity, such as a brand, customer, or other defined component, within the Infobip CPaaS X ecosystem.
     *
     * Use this parameter to filter data for a specific entity.
     *
     * To retrieve all available entity IDs, refer to the
     * [Entity list endpoint](https://www.infobip.com/docs/api/platform/application-entity/get-entities).
     *
     * Example: "your_entity_id"
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
