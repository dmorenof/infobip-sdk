<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * IdOnlyCertificateResponse
 */
final class IdOnlyCertificateResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Certificate identifier.
     */
    public string $certificateId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'certificateId' => is_string($value) ? $this->certificateId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
