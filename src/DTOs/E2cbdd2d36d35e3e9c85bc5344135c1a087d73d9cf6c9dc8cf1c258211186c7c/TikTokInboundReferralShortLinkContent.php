<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c;

/**
 * TikTokInboundReferralShortLinkContent
 */
final class TikTokInboundReferralShortLinkContent extends \InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\TikTokInboundContent
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
     * The conversation id needed for sending MT message.
     */
    public string $conversationId {
        set {
            $this->assigning('conversationId', $value);
            $this->conversationId = $value;
        }
    }
    /**
     * The prefilled message that is configured in the TikTok.me link.
     */
    public string $prefilledMessage;
    public \InfobipSDK\Enums\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\PrefilledMessageAuditStatusEnum $prefilledMessageAuditStatus;
    /**
     * The ref parameter is a URL-encoded string used to track the context of how users enter a conversation via your TikTok.me link. It supports alphanumeric characters and -, _, = with a maximum length of 2,083 characters. Use it to differentiate links across channels or campaigns for analytics purposes.
     */
    public string $ref;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conversationId' => is_string($value) ? $this->conversationId = $value : parent::assignMember($name, $value),
            'prefilledMessage' => is_string($value) ? $this->prefilledMessage = $value : parent::assignMember($name, $value),
            'prefilledMessageAuditStatus' => is_string($value) ? $this->prefilledMessageAuditStatus = \InfobipSDK\Enums\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\PrefilledMessageAuditStatusEnum::from($value) : parent::assignMember($name, $value),
            'ref' => is_string($value) ? $this->ref = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
