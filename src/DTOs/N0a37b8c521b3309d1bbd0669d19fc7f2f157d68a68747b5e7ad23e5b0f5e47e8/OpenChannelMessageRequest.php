<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8;

/**
 * OpenChannelMessageRequest
 * Example: {"sender":"2324435353424","destination":"2235ca45-afdd-47c9-a326-cf66e9872dda","content":{"body":{"text":"Text of the example message.","type":"TEXT"}},"responseWebhook":{"callbackData":"exampleCallbackData"},"metadata":{"field":"value"}}
 */
final class OpenChannelMessageRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'content',
        'destination',
        'sender',
    ];

    protected const array VALIDATION = [
        'destination' => [
            'minLength' => 1,
        ],
        'sender' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
    ];

    public \InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8\OpenChannelMessageContent $content;
    /**
     * Open Channel destination ID registered on Infobip platform, required to be in UUID format.
     */
    public string $destination {
        set {
            $this->assigning('destination', $value);
            $this->destination = $value;
        }
    }
    /**
     * Metadata which will be passed through message to be used in product business logic.
     */
    public \InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8\OpenChannelMessageRequest\MetadataMap $metadata;
    public \InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8\OpenChannelWebhookData $responseWebhook;
    /**
     * Unique end user sender ID.
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
            'content' => $value instanceof \stdClass ? $this->content = new \InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8\OpenChannelMessageContent($value) : parent::assignMember($name, $value),
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'responseWebhook' => $value instanceof \stdClass ? $this->responseWebhook = new \InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8\OpenChannelWebhookData($value) : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
