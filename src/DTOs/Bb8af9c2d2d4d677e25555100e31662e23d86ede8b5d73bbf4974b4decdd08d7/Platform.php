<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7;

/**
 * Platform
 *
 * A collection of CPaaS X Applications and Entities that will be linked to the API key. All Applications and Entities will be removed from the api key if an empty platform list is sent and 'PUBLIC_API' will be assigned as default permission. Or, to remove a specific Application/Entity pair, omit it from the platform list.
 * Documentation: https://www.infobip.com/docs/cpaas-x/application-and-entity-management#api-keys-endpoints-list-api-keys-with-application-and-entity
 */
final class Platform extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'applicationId',
    ];

    protected const array VALIDATION = [
        'applicationId' => [
            'minLength' => 1,
        ],
    ];

    protected const array READ_ONLY_FIELDS = [
        'key',
    ];

    public \InfobipSDK\Enums\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\Action $action;
    /**
     * ID of a CPaaS X Application. Once linked to an Application, the API key can only be used to send messages using linked Applications. Mandatory for every Application and/or Entity pair. Use the default value to reference a default Application. Use an existing Application created using [create-application endpoint](https://www.infobip.com/docs/api/platform/application-entity/create-application) or specify a new applicationId to create a new Application.
     */
    public string $applicationId {
        set {
            $this->assigning('applicationId', $value);
            $this->applicationId = $value;
        }
    }
    /**
     * ID of a CPaaS X Entity. Once linked to an Entity, the API key can only be used to send messages using linked Entities. Use an existing Entity created using [create-entity endpoint](https://www.infobip.com/docs/api/platform/application-entity/create-entity) or specify a new entityId to create a new Entity.
     */
    public string $entityId;
    /**
     * Unique identifier of application and/or entity association.
     */
    public string $key;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = \InfobipSDK\Enums\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\Action::from($value) : parent::assignMember($name, $value),
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
