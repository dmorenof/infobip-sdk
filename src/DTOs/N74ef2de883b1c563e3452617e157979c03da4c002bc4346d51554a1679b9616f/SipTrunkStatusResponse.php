<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f;

/**
 * SipTrunkStatusResponse
 */
final class SipTrunkStatusResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkAdminStatus $adminStatus;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'adminStatus' => is_string($value) ? $this->adminStatus = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkAdminStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
