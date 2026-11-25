<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c;

/**
 * TikTokInboundSharePostContent
 */
final class TikTokInboundSharePostContent extends \InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\TikTokInboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'conversationId' => [
            'minLength' => 1,
        ],
        'embedUrl' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\Context $context;
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
     * An embeddable link for the TikTok post.
     */
    public string $embedUrl {
        set {
            $this->assigning('embedUrl', $value);
            $this->embedUrl = $value;
        }
    }
    public \InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\TikTokReferral $referral;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'context' => $value instanceof \stdClass ? $this->context = new \InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\Context($value) : parent::assignMember($name, $value),
            'conversationId' => is_string($value) ? $this->conversationId = $value : parent::assignMember($name, $value),
            'embedUrl' => is_string($value) ? $this->embedUrl = $value : parent::assignMember($name, $value),
            'referral' => $value instanceof \stdClass ? $this->referral = new \InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\TikTokReferral($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
