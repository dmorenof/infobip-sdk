<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77;

/**
 * CampaignRequest
 */
final class CampaignRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'adAccountId',
        'name',
        'pageId',
    ];

    protected const array VALIDATION = [
        'adAccountId' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
        'name' => [
            'minLength' => 1,
        ],
        'pageId' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
    ];

    /**
     * Facebook ad account ID associated with the campaign.
     * Example: "ACT_123456789"
     */
    public string $adAccountId {
        set {
            $this->assigning('adAccountId', $value);
            $this->adAccountId = $value;
        }
    }
    /**
     * Daily budget for the campaign in cents. At least one of `dailyBudget` or `lifetimeBudget` must be provided.
     * Example: 10000
     * Format: int64
     */
    public int $dailyBudget;
    /**
     * Lifetime budget for the campaign in cents. At least one of `dailyBudget` or `lifetimeBudget` must be provided.
     * Example: 100000
     * Format: int64
     */
    public int $lifetimeBudget;
    /**
     * Campaign name.
     * Example: "Summer Sale Campaign"
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Facebook page ID associated with the campaign.
     * Example: "111111111111111"
     */
    public string $pageId {
        set {
            $this->assigning('pageId', $value);
            $this->pageId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'adAccountId' => is_string($value) ? $this->adAccountId = $value : parent::assignMember($name, $value),
            'dailyBudget' => is_int($value) ? $this->dailyBudget = $value : parent::assignMember($name, $value),
            'lifetimeBudget' => is_int($value) ? $this->lifetimeBudget = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'pageId' => is_string($value) ? $this->pageId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
