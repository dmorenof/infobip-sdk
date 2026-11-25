<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eb583710b0e1739c1b6da279daf56e71bef92e0a50c90d88ff2c7fea69527204;

/**
 * ExtractionWebhookData
 *
 * Result data object.
 */
final class ExtractionWebhookData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Payload extracted from scanned code.
     * Example: "1234567890"
     */
    public string $payload;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payload' => is_string($value) ? $this->payload = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
