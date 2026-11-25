<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f;

/**
 * ExtendedSipTrunkStatusResponse
 */
final class ExtendedSipTrunkStatusResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'activeCalls' => [
            'format' => 'int32',
        ],
    ];

    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkActionStatusResponse $actionStatus;
    /**
     * Number of active calls.
     * Format: int32
     */
    public int $activeCalls {
        set {
            $this->assigning('activeCalls', $value);
            $this->activeCalls = $value;
        }
    }
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkAdminStatus $adminStatus;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkRegistrationStatus $registrationStatus;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionStatus' => $value instanceof \stdClass ? $this->actionStatus = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkActionStatusResponse($value) : parent::assignMember($name, $value),
            'activeCalls' => is_int($value) ? $this->activeCalls = $value : parent::assignMember($name, $value),
            'adminStatus' => is_string($value) ? $this->adminStatus = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkAdminStatus::from($value) : parent::assignMember($name, $value),
            'registrationStatus' => is_string($value) ? $this->registrationStatus = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkRegistrationStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
