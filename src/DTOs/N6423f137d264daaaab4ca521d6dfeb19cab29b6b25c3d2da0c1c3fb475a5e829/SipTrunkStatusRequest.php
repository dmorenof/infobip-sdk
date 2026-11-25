<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6423f137d264daaaab4ca521d6dfeb19cab29b6b25c3d2da0c1c3fb475a5e829;

/**
 * SipTrunkStatusRequest
 *
 * SIP trunk status request.
 */
final class SipTrunkStatusRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'adminStatus',
];

    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkAdminStatus $adminStatus;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'adminStatus' => is_string($value) ? $this->adminStatus = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkAdminStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
