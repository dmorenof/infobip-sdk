<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

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
