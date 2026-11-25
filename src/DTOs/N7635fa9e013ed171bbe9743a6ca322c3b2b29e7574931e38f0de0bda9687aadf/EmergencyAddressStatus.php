<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7635fa9e013ed171bbe9743a6ca322c3b2b29e7574931e38f0de0bda9687aadf;

/**
 * EmergencyAddressStatus
 */
final class EmergencyAddressStatus extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\StatusResponse $emergencyService;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'emergencyService' => $value instanceof \stdClass ? $this->emergencyService = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\StatusResponse($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
