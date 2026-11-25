<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * SeenStatusReporting
 *
 * Provides options for configuring the seen report behavior.
 */
final class SeenStatusReporting extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The URL on your call back server where a seen report will be sent.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
