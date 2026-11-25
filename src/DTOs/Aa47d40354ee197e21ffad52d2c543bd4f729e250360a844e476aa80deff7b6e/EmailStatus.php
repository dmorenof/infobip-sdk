<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Aa47d40354ee197e21ffad52d2c543bd4f729e250360a844e476aa80deff7b6e;

/**
 * EmailStatus
 */
final class EmailStatus extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Human-readable description of the status.
     */
    public string $description;
    /**
     * [Status name](https://www.infobip.com/docs/essentials/response-status-and-error-codes).
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
