<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77;

/**
 * CampaignResponse
 */
final class CampaignResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Facebook ad account ID associated with the campaign.
     * Example: "ACT_123456789"
     */
    public string $adAccountId;
    /**
     * Unique campaign ID.
     * Example: "120213234151570"
     */
    public string $id;
    /**
     * Campaign name.
     * Example: "Summer Sale Campaign"
     */
    public string $name;
    /**
     * Facebook page ID associated with the campaign.
     * Example: "111111111111111"
     */
    public string $pageId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'adAccountId' => is_string($value) ? $this->adAccountId = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'pageId' => is_string($value) ? $this->pageId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
