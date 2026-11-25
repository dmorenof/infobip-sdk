<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * QuotaInfo
 *
 * Information about ZNS message quotas.
 */
final class QuotaInfo extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Number of ZNS messages that the OA can send in a day.
     * Format: int64
     */
    public int $dailyQuota;
    /**
     * Estimated number of ZNS promotional messages that the OA can send in the next month.
     * Format: int64
     */
    public int $estimatedNextMonthPromotionQuota;
    /**
     * Number of ZNS promotional messages that the OA can send in a month.
     * Format: int64
     */
    public int $monthlyPromotionQuota;
    /**
     * Remaining number of ZNS messages that the OA can send in a day.
     * Format: int64
     */
    public int $remainingDailyQuota;
    /**
     * Remaining number of ZNS promotional messages that the OA can send in a month.
     * Format: int64
     */
    public int $remainingMonthlyPromotionQuota;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dailyQuota' => is_int($value) ? $this->dailyQuota = $value : parent::assignMember($name, $value),
            'estimatedNextMonthPromotionQuota' => is_int($value) ? $this->estimatedNextMonthPromotionQuota = $value : parent::assignMember($name, $value),
            'monthlyPromotionQuota' => is_int($value) ? $this->monthlyPromotionQuota = $value : parent::assignMember($name, $value),
            'remainingDailyQuota' => is_int($value) ? $this->remainingDailyQuota = $value : parent::assignMember($name, $value),
            'remainingMonthlyPromotionQuota' => is_int($value) ? $this->remainingMonthlyPromotionQuota = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
