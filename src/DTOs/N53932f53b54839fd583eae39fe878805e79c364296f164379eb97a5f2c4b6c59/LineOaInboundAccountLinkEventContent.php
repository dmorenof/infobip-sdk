<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineOaInboundAccountLinkEventContent
 */
final class LineOaInboundAccountLinkEventContent extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaInboundContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'nonce' => [
            'minLength' => 1,
        ],
        'replyToken' => [
            'minLength' => 1,
        ],
        'result' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Nonce used for the account link.
     * Example: "somerandomstring"
     */
    public string $nonce {
        set {
            $this->assigning('nonce', $value);
            $this->nonce = $value;
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
     * Result of the account link.
     * Example: "ok"
     */
    public string $result {
        set {
            $this->assigning('result', $value);
            $this->result = $value;
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
            'nonce' => is_string($value) ? $this->nonce = $value : parent::assignMember($name, $value),
            'replyToken' => is_string($value) ? $this->replyToken = $value : parent::assignMember($name, $value),
            'result' => is_string($value) ? $this->result = $value : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
