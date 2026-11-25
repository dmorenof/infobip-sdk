<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

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
