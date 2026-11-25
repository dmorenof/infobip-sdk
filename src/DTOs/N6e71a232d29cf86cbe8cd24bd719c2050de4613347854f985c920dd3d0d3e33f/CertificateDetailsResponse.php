<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * CertificateDetailsResponse
 */
final class CertificateDetailsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Certificate's identifier.
     */
    public string $certificateId;
    public \InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateStatus $certificateStatus;
    /**
     * Certificate's Issuer information.
     */
    public string $issuedBy;
    /**
     * Certificate's Subject information.
     */
    public string $issuedTo;
    /**
     * A certificate's serial number.
     */
    public string $serialNumber;
    /**
     * Date and time from which the certificate is valid (milliseconds since the UNIX epoch).
     * Format: int64
     */
    public int $validFrom;
    /**
     * Date and time until which the certificate is valid (milliseconds since the UNIX epoch).
     * Format: int64
     */
    public int $validUntil;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'certificateId' => is_string($value) ? $this->certificateId = $value : parent::assignMember($name, $value),
            'certificateStatus' => is_string($value) ? $this->certificateStatus = \InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateStatus::from($value) : parent::assignMember($name, $value),
            'issuedBy' => is_string($value) ? $this->issuedBy = $value : parent::assignMember($name, $value),
            'issuedTo' => is_string($value) ? $this->issuedTo = $value : parent::assignMember($name, $value),
            'serialNumber' => is_string($value) ? $this->serialNumber = $value : parent::assignMember($name, $value),
            'validFrom' => is_int($value) ? $this->validFrom = $value : parent::assignMember($name, $value),
            'validUntil' => is_int($value) ? $this->validUntil = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
