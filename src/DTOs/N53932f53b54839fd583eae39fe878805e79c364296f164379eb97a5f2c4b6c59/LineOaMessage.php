<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineOaMessage
 *
 * An array of message objects of a single message or multiple messages sent under one bulk ID.
 */
final class LineOaMessage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'content',
        'destinations',
        'sender',
    ];

    protected const array VALIDATION = [
        'destinations' => [
            'minItems' => 1,
        ],
        'sender' => [
            'minLength' => 1,
        ],
    ];

    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaOutboundContent $content;
    /**
     * An array of destination objects for where messages are being sent. A valid destination is required.
     */
    public \InfobipSDK\Collections\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaMessage\DestinationsCollection $destinations {
        set {
            $this->assigning('destinations', $value);
            $this->destinations = $value;
        }
    }
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\NonMsisdnMessageFailoverOptions $options;
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineQuickReply $quickReply;
    /**
     * Reply token received from an inbound LINE webhook. When provided, the message is sent free of charge and doesn't count towards the LINE Official Account monthly message quota. It looks the same in the chat as any other message: this doesn't quote the message you're replying to. Reply tokens are single-use and must be used within one minute of receiving the webhook. An expired or already used token doesn't fail the message, it's delivered as a regular quota-counted message instead.
     * Example: "nHuyWiB7yP5Zw52FIkcQobQuGDXCTA"
     */
    public string $replyToken;
    /**
     * Registered LINE Official Account channel ID used as the sender.
     * Example: "LINE_OA_CHANNEL"
     */
    public string $sender {
        set {
            $this->assigning('sender', $value);
            $this->sender = $value;
        }
    }
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Webhooks $webhooks;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destinations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->destinations = new \InfobipSDK\Collections\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaMessage\DestinationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ToDestination::class)) : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\NonMsisdnMessageFailoverOptions($value) : parent::assignMember($name, $value),
            'quickReply' => $value instanceof \stdClass ? $this->quickReply = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineQuickReply($value) : parent::assignMember($name, $value),
            'replyToken' => is_string($value) ? $this->replyToken = $value : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'webhooks' => $value instanceof \stdClass ? $this->webhooks = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Webhooks($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
