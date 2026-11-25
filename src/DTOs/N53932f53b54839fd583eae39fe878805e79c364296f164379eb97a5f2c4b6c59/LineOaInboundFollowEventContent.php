<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineOaInboundFollowEventContent
 */
final class LineOaInboundFollowEventContent extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaInboundContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'replyToken' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

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
            'replyToken' => is_string($value) ? $this->replyToken = $value : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
