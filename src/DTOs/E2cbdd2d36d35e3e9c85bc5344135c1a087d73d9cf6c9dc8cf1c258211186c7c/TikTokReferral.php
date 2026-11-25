<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c;

/**
 * TikTokReferral
 *
 * Referral information if the message was triggered by a referral entry point.
 */
final class TikTokReferral extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of the advertiser account associated with the ad.
     */
    public string $advertiserId;
    /**
     * Material ID — encoded ID of a creative within Upgraded Smart+ Ads.
     */
    public string $creativeId;
    /**
     * Ad ID of the referral ad.
     */
    public string $sourceId;
    /**
     * The name of the related ad.
     */
    public string $sourceName;
    public \InfobipSDK\Enums\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\TikTokReferralSourceStatus $sourceStatus;
    public \InfobipSDK\Enums\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\TikTokReferralSourceType $sourceType;
    /**
     * An embeddable link for the TikTok post used in the ad.
     */
    public string $sourceUrl;
    /**
     * Tracking reference parameter from TikTok.me short link.
     */
    public string $trackingRef;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'advertiserId' => is_string($value) ? $this->advertiserId = $value : parent::assignMember($name, $value),
            'creativeId' => is_string($value) ? $this->creativeId = $value : parent::assignMember($name, $value),
            'sourceId' => is_string($value) ? $this->sourceId = $value : parent::assignMember($name, $value),
            'sourceName' => is_string($value) ? $this->sourceName = $value : parent::assignMember($name, $value),
            'sourceStatus' => is_string($value) ? $this->sourceStatus = \InfobipSDK\Enums\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\TikTokReferralSourceStatus::from($value) : parent::assignMember($name, $value),
            'sourceType' => is_string($value) ? $this->sourceType = \InfobipSDK\Enums\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\TikTokReferralSourceType::from($value) : parent::assignMember($name, $value),
            'sourceUrl' => is_string($value) ? $this->sourceUrl = $value : parent::assignMember($name, $value),
            'trackingRef' => is_string($value) ? $this->trackingRef = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
