<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc;

/**
 * NrsApiResponse
 *
 * Number Risk Score success response object
 */
final class NrsApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'requestId',
        'status',
    ];

    /**
     * Indicator whether or not number had bot like behavior.
     */
    public ?bool $botLikeBehavior;
    public \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\CarrierInfo $carrierInfo;
    public \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\NumberVelocity $numberVelocity;
    public \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\RangeVelocity $rangeVelocity;
    /**
     * A unique request identifier
     * Example: "667a35d6-d802-4439-9d69-15e272ad558f"
     */
    public string $requestId;
    public \InfobipSDK\Enums\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\RiskLevel $riskLevel;
    public \InfobipSDK\Enums\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\ResponseStatus $status;
    public \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\Tenure $tenure;
    /**
     * Indicator whether or not number had trusted interactions.
     */
    public ?bool $trustedInteraction;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'botLikeBehavior' => $value === null || is_bool($value) ? $this->botLikeBehavior = $value : parent::assignMember($name, $value),
            'carrierInfo' => $value instanceof \stdClass ? $this->carrierInfo = new \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\CarrierInfo($value) : parent::assignMember($name, $value),
            'numberVelocity' => $value instanceof \stdClass ? $this->numberVelocity = new \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\NumberVelocity($value) : parent::assignMember($name, $value),
            'rangeVelocity' => $value instanceof \stdClass ? $this->rangeVelocity = new \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\RangeVelocity($value) : parent::assignMember($name, $value),
            'requestId' => is_string($value) ? $this->requestId = $value : parent::assignMember($name, $value),
            'riskLevel' => is_string($value) ? $this->riskLevel = \InfobipSDK\Enums\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\RiskLevel::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\ResponseStatus::from($value) : parent::assignMember($name, $value),
            'tenure' => $value instanceof \stdClass ? $this->tenure = new \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\Tenure($value) : parent::assignMember($name, $value),
            'trustedInteraction' => $value === null || is_bool($value) ? $this->trustedInteraction = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
