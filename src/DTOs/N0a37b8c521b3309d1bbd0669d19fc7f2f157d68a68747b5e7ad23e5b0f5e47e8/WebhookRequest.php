<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8;

/**
 * WebhookRequest
 * Example: {"sender":"2235ca45-afdd-47c9-a326-cf66e9872dda","destination":"2324435353424","content":{"body":{"type":"TEXT","text":"Text of example message"}},"callbackData":"Example callback data"}
 */
final class WebhookRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destination',
        'message',
        'sender',
    ];

    protected const array VALIDATION = [
        'destination' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'sender' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Additional data that can be used for identifying a message response. Included in the inbound message request,  sent as response to inbound message.
     */
    public \InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8\WebhookRequest\CallbackDataDTO $callbackData;
    /**
     * Unique end user destination ID.
     */
    public string $destination {
        set {
            $this->assigning('destination', $value);
            $this->destination = $value;
        }
    }
    public \InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8\OpenChannelMessageContent $message;
    /**
     * Open Channel sender ID registered on Infobip platform. In UUID format.
     */
    public string $sender {
        set {
            $this->assigning('sender', $value);
            $this->sender = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'message' => $value instanceof \stdClass ? $this->message = new \InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8\OpenChannelMessageContent($value) : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
