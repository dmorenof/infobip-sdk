<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * RcsMessage
 *
 * An array of message objects of a single message or multiple messages sent under one bulk ID.
 */
final class RcsMessage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
    'destinations',
];

    protected const array VALIDATION = [
    'destinations' => [
        'minItems' => 1,
    ],
];

    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsOutboundMessageContent $content;
    /**
     * An array of destination objects for where messages are being sent. A valid destination is required.
     */
    public \InfobipSDK\Collections\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsEvent\DestinationsCollection $destinations {
        set {
            $this->assigning('destinations', $value);
            $this->destinations = $value;
        }
    }
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsFailoverOptions $options;
    /**
     * Identifier of an RCS sender that will be used to send message.
     */
    public string $sender;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\AdvancedWebhooksWithSeen $webhooks;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => $value instanceof \stdClass ? $this->content = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsOutboundMessageContent($value) : parent::assignMember($name, $value),
            'destinations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->destinations = new \InfobipSDK\Collections\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsEvent\DestinationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\ToDestination::class)) : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsFailoverOptions($value) : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'webhooks' => $value instanceof \stdClass ? $this->webhooks = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\AdvancedWebhooksWithSeen($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
