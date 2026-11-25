<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c;

/**
 * PlatformRequest
 *
 * An application/entity pair to create a blocking configuration for.
 */
final class PlatformRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'application',
];

    /**
     * External ID of the application. See [Applications and entities](https://www.infobip.com/docs/cpaas-x/applications-and-entities) for what an application is and how to find its id.
     * Example: "MyApplication1"
     */
    public string $application;
    /**
     * External ID of the entity. If omitted, the blocking configuration applies to the application without an entity.
     * Example: "MyEntity1"
     */
    public string $entity;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'application' => is_string($value) ? $this->application = $value : parent::assignMember($name, $value),
            'entity' => is_string($value) ? $this->entity = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
