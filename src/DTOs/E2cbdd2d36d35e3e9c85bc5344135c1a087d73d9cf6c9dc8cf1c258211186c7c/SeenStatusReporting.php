<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c;

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
