<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * BrandWebhookPlatform
 *
 * Platform properties.
 */
final class BrandWebhookPlatform extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Brand application id.
     * Example: "application-id"
     */
    public string $applicationId;
    /**
     * Brand entity id.
     * Example: "entity-id"
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
