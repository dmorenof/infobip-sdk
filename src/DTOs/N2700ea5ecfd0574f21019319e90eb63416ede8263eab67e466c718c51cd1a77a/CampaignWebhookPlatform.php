<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * CampaignWebhookPlatform
 *
 * Platform properties.
 */
final class CampaignWebhookPlatform extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Campaign application id.
     * Example: "application-id"
     */
    public string $applicationId;
    /**
     * Campaign entity id.
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
