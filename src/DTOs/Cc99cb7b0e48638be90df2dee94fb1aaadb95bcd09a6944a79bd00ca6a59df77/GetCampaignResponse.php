<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77;

/**
 * GetCampaignResponse
 *
 * List of campaigns.
 */
final class GetCampaignResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Ad account ID.
     * Example: "3339405976215927"
     */
    public string $adAccountId;
    /**
     * Daily budget in cents. Zero if a lifetime budget is set.
     * Example: 0
     * Format: int64
     */
    public int $dailyBudget;
    /**
     * Campaign end time.
     * Example: "2026-05-20T01:08:09-0700"
     */
    public string $endTime;
    /**
     * Campaign ID.
     * Example: "6938008105758"
     */
    public string $id;
    /**
     * Lifetime budget in cents.
     * Example: 3000
     * Format: int64
     */
    public int $lifetimeBudget;
    /**
     * Campaign name.
     * Example: "Campaign Name"
     */
    public string $name;
    /**
     * Facebook Page ID.
     * Example: "975663645629834"
     */
    public string $pageId;
    /**
     * Campaign start time.
     * Example: "2026-04-20T01:08:10-0700"
     */
    public string $startTime;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'adAccountId' => is_string($value) ? $this->adAccountId = $value : parent::assignMember($name, $value),
            'dailyBudget' => is_int($value) ? $this->dailyBudget = $value : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'lifetimeBudget' => is_int($value) ? $this->lifetimeBudget = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'pageId' => is_string($value) ? $this->pageId = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
