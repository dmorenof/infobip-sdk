<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc;

/**
 * CarrierInfo
 *
 * Carrier info response object
 */
final class CarrierInfo extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\LineType $lineType;
    public \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\OriginalNetwork $originalNetwork;
    /**
     * Flag describing whether or not number is ported to another network.
     */
    public ?bool $ported;
    public \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\PortedNetwork $portedNetwork;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'lineType' => is_string($value) ? $this->lineType = \InfobipSDK\Enums\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\LineType::from($value) : parent::assignMember($name, $value),
            'originalNetwork' => $value instanceof \stdClass ? $this->originalNetwork = new \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\OriginalNetwork($value) : parent::assignMember($name, $value),
            'ported' => $value === null || is_bool($value) ? $this->ported = $value : parent::assignMember($name, $value),
            'portedNetwork' => $value instanceof \stdClass ? $this->portedNetwork = new \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\PortedNetwork($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
