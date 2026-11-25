<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * CertificateStatusResponse
 */
final class CertificateStatusResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Certificate identifier.
     */
    public string $certificateId;
    public \InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'certificateId' => is_string($value) ? $this->certificateId = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
