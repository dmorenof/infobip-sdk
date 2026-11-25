<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c;

/**
 * UpdatePlatformRequest
 *
 * An existing blocking configuration to update.
 */
final class UpdatePlatformRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'configId',
];

    protected const array VALIDATION = [
    'configId' => [
        'minLength' => 32,
        'maxLength' => 32,
    ],
];

    /**
     * ID of the blocking configuration to update, as returned by other endpoints.
     * Example: "37B93F4D2BA3C58B58526EAEAA1AB35A"
     */
    public string $configId {
        set {
            $this->assigning('configId', $value);
            $this->configId = $value;
        }
    }
    /**
     * Enable or disable this blocking configuration. Omit to leave unchanged.
     */
    public bool $enabled;
    /**
     * New blocking sensitivity to apply. Omit to leave sensitivity unchanged. Sensitivity controls how much suspicious traffic is blocked, from VERY_STRICT (the most) to CONSERVATIVE (only high-confidence fraud).
     */
    public \InfobipSDK\Enums\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\UpdatePlatformRequest\SensitivityEnum $sensitivity;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'configId' => is_string($value) ? $this->configId = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'sensitivity' => is_string($value) ? $this->sensitivity = \InfobipSDK\Enums\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\UpdatePlatformRequest\SensitivityEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
