<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * NumberPoolUsageApiResponse
 *
 * The list of the results for this page.
 */
final class NumberPoolUsageApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique identifier of the campaign currently associated with this number pool. If the number pool is unassigned, this field will be empty.
     */
    public string $campaignId;
    /**
     * Name of the associated campaign. Will be empty if no campaign is associated.
     */
    public string $campaignName;
    /**
     * Unique identifier of the number pool.
     */
    public string $numberPoolId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'campaignId' => is_string($value) ? $this->campaignId = $value : parent::assignMember($name, $value),
            'campaignName' => is_string($value) ? $this->campaignName = $value : parent::assignMember($name, $value),
            'numberPoolId' => is_string($value) ? $this->numberPoolId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
