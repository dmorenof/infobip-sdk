<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * BrandStatus
 */
final class BrandStatus extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The status of brand authentication applicable for TENDLC_PUBLIC_COMPANY brand type.
     * Example: "PENDING"
     */
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandStatus\AuthenticationStatusEnum $brandAuthenticationStatus;
    /**
     * The status of the brand as determined by the registrar.
     * Example: "UNVERIFIED"
     */
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandStatus\IdentityStatusEnum $brandIdentityStatus;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandRegistrar $registrar;
    /**
     * The reason for brand registration rejection.
     * Example: "Invalid country code."
     */
    public string $rejectionReason;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandRegistrationStatusPublic $state;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brandAuthenticationStatus' => is_string($value) ? $this->brandAuthenticationStatus = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandStatus\AuthenticationStatusEnum::from($value) : parent::assignMember($name, $value),
            'brandIdentityStatus' => is_string($value) ? $this->brandIdentityStatus = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandStatus\IdentityStatusEnum::from($value) : parent::assignMember($name, $value),
            'registrar' => is_string($value) ? $this->registrar = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandRegistrar::from($value) : parent::assignMember($name, $value),
            'rejectionReason' => is_string($value) ? $this->rejectionReason = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandRegistrationStatusPublic::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
