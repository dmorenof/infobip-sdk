<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * NumberPool
 *
 * The number pool to be used with the campaign.
 */
final class NumberPool extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * NNID of number pool
     */
    public string $nnid;
    /**
     * Registrar ID of number pool
     */
    public string $numberPoolId;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NumberPoolStatus $numberPoolStatus;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NumberPoolType $numberPoolType;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\PolicyType $policy;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'nnid' => is_string($value) ? $this->nnid = $value : parent::assignMember($name, $value),
            'numberPoolId' => is_string($value) ? $this->numberPoolId = $value : parent::assignMember($name, $value),
            'numberPoolStatus' => is_string($value) ? $this->numberPoolStatus = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NumberPoolStatus::from($value) : parent::assignMember($name, $value),
            'numberPoolType' => is_string($value) ? $this->numberPoolType = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NumberPoolType::from($value) : parent::assignMember($name, $value),
            'policy' => is_string($value) ? $this->policy = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\PolicyType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
