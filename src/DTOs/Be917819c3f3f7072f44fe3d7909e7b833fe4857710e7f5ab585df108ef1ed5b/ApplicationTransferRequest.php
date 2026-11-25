<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be917819c3f3f7072f44fe3d7909e7b833fe4857710e7f5ab585df108ef1ed5b;

/**
 * ApplicationTransferRequest
 */
final class ApplicationTransferRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'destinationCallsConfigurationId',
];

    protected const array VALIDATION = [
    'timeout' => [
        'format' => 'int32',
    ],
];

    /**
     * Optional parameter to update a call's custom data.
     */
    public \InfobipSDK\DTOs\Be917819c3f3f7072f44fe3d7909e7b833fe4857710e7f5ab585df108ef1ed5b\ApplicationTransferRequest\CustomDataMap $customData;
    /**
     * ID of the calls configuration to which the call is to be transferred.
     */
    public string $destinationCallsConfigurationId;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Platform $platform;
    public \InfobipSDK\DTOs\Be917819c3f3f7072f44fe3d7909e7b833fe4857710e7f5ab585df108ef1ed5b\ApplicationTransferPropagationOptions $propagationOptions;
    /**
     * Time to wait, in seconds, for the receiving application to accept the transfer.
     * Format: int32
     */
    public int $timeout {
        set {
            $this->assigning('timeout', $value);
            $this->timeout = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destinationCallsConfigurationId' => is_string($value) ? $this->destinationCallsConfigurationId = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Platform($value) : parent::assignMember($name, $value),
            'propagationOptions' => $value instanceof \stdClass ? $this->propagationOptions = new \InfobipSDK\DTOs\Be917819c3f3f7072f44fe3d7909e7b833fe4857710e7f5ab585df108ef1ed5b\ApplicationTransferPropagationOptions($value) : parent::assignMember($name, $value),
            'timeout' => is_int($value) ? $this->timeout = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
