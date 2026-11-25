<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N707907921d4508c2925eddc2449f10db322ecc083be424f87c50fe97ccd8be40;

/**
 * AddExistingCallRequest
 */
final class AddExistingCallRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates whether to add an existing call on early media. Otherwise, the call will be added after being established. This field is applicable for `OUTBOUND` calls only. Cannot be `true` when `ringbackGeneration` is enabled.
     */
    public bool $connectOnEarlyMedia;
    /**
     * Optional parameter to update a call's custom data.
     */
    public \InfobipSDK\DTOs\N707907921d4508c2925eddc2449f10db322ecc083be424f87c50fe97ccd8be40\AddExistingCallRequest\CustomDataMap $customData;
    public \InfobipSDK\DTOs\Efc1265916a727aef4eb46ff2e01c3e0ad0c1ad70cf38d568ed99c04a9a73fa0\RingbackGeneration $ringbackGeneration;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Role $role;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'connectOnEarlyMedia' => is_bool($value) ? $this->connectOnEarlyMedia = $value : parent::assignMember($name, $value),
            'ringbackGeneration' => $value instanceof \stdClass ? $this->ringbackGeneration = new \InfobipSDK\DTOs\Efc1265916a727aef4eb46ff2e01c3e0ad0c1ad70cf38d568ed99c04a9a73fa0\RingbackGeneration($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
