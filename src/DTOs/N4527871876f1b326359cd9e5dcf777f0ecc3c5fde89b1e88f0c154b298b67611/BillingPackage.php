<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * BillingPackage
 *
 * Billing package.
 */
final class BillingPackage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'packageType',
];

    /**
     * ID of SIP trunk address.
     */
    public string $addressId;
    /**
     * Country code. Currently, only `USA` is supported and required for the `UNLIMITED` package type.
     * Example: "USA"
     */
    public string $countryCode;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BillingPackageType $packageType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'addressId' => is_string($value) ? $this->addressId = $value : parent::assignMember($name, $value),
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'packageType' => is_string($value) ? $this->packageType = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BillingPackageType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
