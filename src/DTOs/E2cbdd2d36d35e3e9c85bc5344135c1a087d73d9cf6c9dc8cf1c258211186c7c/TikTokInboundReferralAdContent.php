<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c;

/**
 * TikTokInboundReferralAdContent
 */
final class TikTokInboundReferralAdContent extends \InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\TikTokInboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'conversationId' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Ad ID of the referral ad.
     */
    public string $adId;
    /**
     * The name of the related ad.
     */
    public string $adName;
    /**
     * The ID of the advertiser account that is associated with the ad.
     */
    public string $advertiserId;
    /**
     * The conversation id needed for sending MT message.
     */
    public string $conversationId {
        set {
            $this->assigning('conversationId', $value);
            $this->conversationId = $value;
        }
    }
    /**
     * An embeddable link for the TikTok post used in the related ad.
     */
    public string $embedUrl;
    /**
     * The ID is the encoded identifier of a creative from a campaign created via Upgraded Smart+ Ads API or Smart+ API.
     */
    public string $messageMaterialId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'adId' => is_string($value) ? $this->adId = $value : parent::assignMember($name, $value),
            'adName' => is_string($value) ? $this->adName = $value : parent::assignMember($name, $value),
            'advertiserId' => is_string($value) ? $this->advertiserId = $value : parent::assignMember($name, $value),
            'conversationId' => is_string($value) ? $this->conversationId = $value : parent::assignMember($name, $value),
            'embedUrl' => is_string($value) ? $this->embedUrl = $value : parent::assignMember($name, $value),
            'messageMaterialId' => is_string($value) ? $this->messageMaterialId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
