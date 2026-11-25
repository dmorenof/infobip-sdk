<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8;

/**
 * OpenChannelWebhookData
 *
 * Response webhook data.
 */
final class OpenChannelWebhookData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'url' => [
        'pattern' => '',
    ],
];

    /**
     * Additional data that can be used for identifying a message response. Data contained here will be included in the outbound message sent as response to this inbound message.
     */
    public \InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8\OpenChannelWebhookData\CallbackDataDTO $callbackData;
    /**
     * Override URL to which the outbound response will be sent, required to be in HTTPS URL format.
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
