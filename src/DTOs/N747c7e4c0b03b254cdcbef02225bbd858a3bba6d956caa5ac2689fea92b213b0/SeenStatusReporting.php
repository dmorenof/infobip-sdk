<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

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
