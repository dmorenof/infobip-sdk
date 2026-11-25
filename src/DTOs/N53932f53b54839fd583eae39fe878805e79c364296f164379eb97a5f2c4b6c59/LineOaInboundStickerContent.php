<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineOaInboundStickerContent
 */
final class LineOaInboundStickerContent extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaInboundContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'packageId' => [
        'minLength' => 1,
    ],
    'replyToken' => [
        'minLength' => 1,
    ],
    'stickerId' => [
        'minLength' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaInboundAttachment $moAttachment;
    /**
     * Package ID of the sticker set.
     * Example: "446"
     */
    public string $packageId {
        set {
            $this->assigning('packageId', $value);
            $this->packageId = $value;
        }
    }
    /**
     * Reply token for this message. Send it back as replyToken within one minute to have your next message delivered free of charge. Single-use.
     * Example: "nHuyWiB7yP5Zw52FIkcQobQuGDXCTA"
     */
    public string $replyToken {
        set {
            $this->assigning('replyToken', $value);
            $this->replyToken = $value;
        }
    }
    /**
     * Sticker ID within the package.
     * Example: "1988"
     */
    public string $stickerId {
        set {
            $this->assigning('stickerId', $value);
            $this->stickerId = $value;
        }
    }
    /**
     * Sticker resource type, when provided.
     * Example: "STATIC"
     */
    public string $stickerResourceType;
    /**
     * Event timestamp in milliseconds since epoch.
     * Example: 1695725535457
     * Format: int64
     */
    public int $timestamp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'moAttachment' => $value instanceof \stdClass ? $this->moAttachment = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaInboundAttachment($value) : parent::assignMember($name, $value),
            'packageId' => is_string($value) ? $this->packageId = $value : parent::assignMember($name, $value),
            'replyToken' => is_string($value) ? $this->replyToken = $value : parent::assignMember($name, $value),
            'stickerId' => is_string($value) ? $this->stickerId = $value : parent::assignMember($name, $value),
            'stickerResourceType' => is_string($value) ? $this->stickerResourceType = $value : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
