<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719;

/**
 * CampaignListResponse
 */
final class CampaignListResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'campaigns',
];

    /**
     * List of campaign objects.
     */
    public \InfobipSDK\Collections\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignListResponse\CampaignsCollection $campaigns;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'campaigns' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->campaigns = new \InfobipSDK\Collections\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignListResponse\CampaignsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\Campaign::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
