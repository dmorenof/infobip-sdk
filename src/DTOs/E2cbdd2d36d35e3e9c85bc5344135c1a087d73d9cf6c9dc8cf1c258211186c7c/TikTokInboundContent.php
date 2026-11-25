<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c;

/**
 * TikTokInboundContent
 *
 * Message content.
 */
class TikTokInboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    'IMAGE' => 'InfobipSDK\\DTOs\\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\\TikTokInboundImageContent',
    'REACTION' => 'InfobipSDK\\DTOs\\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\\TikTokInboundReactionContent',
    'REFERRAL_AD' => 'InfobipSDK\\DTOs\\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\\TikTokInboundReferralAdContent',
    'REFERRAL_SHORT_LINK' => 'InfobipSDK\\DTOs\\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\\TikTokInboundReferralShortLinkContent',
    'SHARE_POST' => 'InfobipSDK\\DTOs\\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\\TikTokInboundSharePostContent',
    'TEXT' => 'InfobipSDK\\DTOs\\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\\TikTokInboundTextContent',
    'e2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c.TikTokInboundImageContent' => 'InfobipSDK\\DTOs\\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\\TikTokInboundImageContent',
    'e2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c.TikTokInboundReactionContent' => 'InfobipSDK\\DTOs\\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\\TikTokInboundReactionContent',
    'e2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c.TikTokInboundReferralAdContent' => 'InfobipSDK\\DTOs\\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\\TikTokInboundReferralAdContent',
    'e2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c.TikTokInboundReferralShortLinkContent' => 'InfobipSDK\\DTOs\\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\\TikTokInboundReferralShortLinkContent',
    'e2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c.TikTokInboundSharePostContent' => 'InfobipSDK\\DTOs\\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\\TikTokInboundSharePostContent',
    'e2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c.TikTokInboundTextContent' => 'InfobipSDK\\DTOs\\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\\TikTokInboundTextContent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\TikTokInboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\TikTokInboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
