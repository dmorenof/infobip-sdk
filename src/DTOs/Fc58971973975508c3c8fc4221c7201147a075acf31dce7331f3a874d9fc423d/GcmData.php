<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Fc58971973975508c3c8fc4221c7201147a075acf31dce7331f3a874d9fc423d;

/**
 * GcmData
 *
 * GCM data.
 */
final class GcmData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Equals true if sending messages via Firebase is enabled for this application.
     */
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
