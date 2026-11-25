<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * RcsMessageOrderingOptions
 */
final class RcsMessageOrderingOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * If set to `true`, messages will be sent in the same order as they are provided in the request. Following rules must be respected in that case:
     * * The `messages` array can contain either 2 messages, where only the first message has failover defined, or between 2 and 10 messages, none of which has failover defined.
     * * Following properties must be the same for all messages in the request: `sender`, `destinations`, `options.platform`, `options.deliveryTimeWindow`, `options.campaignReferenceId`, `webhooks.delivery`, `webhooks.contentType`, `webhooks.callbackData`, `webhooks.seen`.
     * For best experience, if message ordering is used, it's recommended to have list of suggestions defined for last message only or have it the same for all messages in the request.
     * Example: true
     */
    public bool $respectOrder;
    /**
     * It can be used in combination with `respectOrder` to stop sending messages if any message fails. It will be respected only if none of the messages from the request has failover defined. If failover is used, the system will, by default, send only the failover message and will not send the second message from the request.
     * Example: true
     */
    public bool $stopOnFailure;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'respectOrder' => is_bool($value) ? $this->respectOrder = $value : parent::assignMember($name, $value),
            'stopOnFailure' => is_bool($value) ? $this->stopOnFailure = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
