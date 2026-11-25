<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * Profile
 *
 * Notification profile.
 */
final class IdOnlyProfileResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique profile ID.
     */
    public string $profileId;
    public \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySecurityResponse $security;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'profileId' => is_string($value) ? $this->profileId = $value : parent::assignMember($name, $value),
            'security' => $value instanceof \stdClass ? $this->security = new \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySecurityResponse($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
