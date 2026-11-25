<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc;

/**
 * NumberVelocity
 *
 * Number Velocity response object
 */
final class NumberVelocity extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\VelocitySummary $last24Hours;
    public \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\VelocitySummaryDetailed $last90Days;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'last24Hours' => $value instanceof \stdClass ? $this->last24Hours = new \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\VelocitySummary($value) : parent::assignMember($name, $value),
            'last90Days' => $value instanceof \stdClass ? $this->last90Days = new \InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc\VelocitySummaryDetailed($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
