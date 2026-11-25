<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineOaInboundMemberJoinEventContent
 */
final class LineOaInboundMemberJoinEventContent extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaInboundContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'members' => [
            'minItems' => 1,
        ],
        'replyToken' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * LINE user IDs of members who joined.
     * Example: ["U4af4980629c7d8b0ec2081de268c027d"]
     */
    public \InfobipSDK\Collections\StringCollection $members {
        set {
            $this->assigning('members', $value);
            $this->members = $value;
        }
    }
    /**
     * Reply token for this event. Send it back as replyToken within one minute to have your next message delivered free of charge. Single-use.
     * Example: "nHuyWiB7yP5Zw52FIkcQobQuGDXCTA"
     */
    public string $replyToken {
        set {
            $this->assigning('replyToken', $value);
            $this->replyToken = $value;
        }
    }
    /**
     * Event timestamp in milliseconds since epoch.
     * Example: 1695725535457
     * Format: int64
     */
    public int $timestamp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'members' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->members = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'replyToken' => is_string($value) ? $this->replyToken = $value : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
