<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2;

/**
 * PublicRegion
 *
 * SIP trunk service address region.
 */
final class PublicRegion extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Code of the region from the country where SIP trunk is located.
     */
    public string $code;
    /**
     * Code of the country where SIP trunk is located.
     */
    public string $countryCode;
    /**
     * Name of the region from the country where SIP trunk is located.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
