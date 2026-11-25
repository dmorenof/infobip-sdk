<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187;

/**
 * Bot
 * Example: {"displayName":"My Whatsapp Bot","webhookUrl":"www.webhookurl.com/link1","destination":"447492263897","channel":"WHATSAPP","messagePersistencePolicy":"PERSIST_ALL","enabled":true,"sessionTimeoutInSec":120}
 */
final class Bot extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'channel',
    'destination',
    'displayName',
];

    protected const array VALIDATION = [
    'destination' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'displayName' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'sessionTimeoutInSec' => [
        'minimum' => 60,
        'maximum' => 86400,
    ],
    'webhookEventUrl' => [
        'minLength' => 0,
        'maxLength' => 2000,
        'pattern' => '',
    ],
    'webhookUrl' => [
        'minLength' => 0,
        'maxLength' => 2000,
        'pattern' => '',
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'id',
];

    public \InfobipSDK\Enums\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\MessageChannel $channel;
    /**
     * Bot destination phone number, FB messenger ID or live chat widget ID.
     */
    public string $destination {
        set {
            $this->assigning('destination', $value);
            $this->destination = $value;
        }
    }
    /**
     * Bot name to be displayed.
     */
    public string $displayName {
        set {
            $this->assigning('displayName', $value);
            $this->displayName = $value;
        }
    }
    /**
     * Bot enable/disable toggle.
     */
    public bool $enabled;
    public string $id;
    public \InfobipSDK\Enums\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\MessagePersistencePolicy $messagePersistencePolicy;
    /**
     * Time elapsed from last client message, after which conversation will be closed. If not set, conversation will be closed after 24 hours.
     * Format: int64
     */
    public int $sessionTimeoutInSec {
        set {
            $this->assigning('sessionTimeoutInSec', $value);
            $this->sessionTimeoutInSec = $value;
        }
    }
    public \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\Bot\EventHeadersMap $webhookEventHeaders;
    public string $webhookEventUrl {
        set {
            $this->assigning('webhookEventUrl', $value);
            $this->webhookEventUrl = $value;
        }
    }
    /**
     * @deprecated
     */
    public \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\Bot\WebhookHeadersMap $webhookHeaders;
    /**
     * Webhook url the message will be forwarded to.
     */
    public string $webhookUrl {
        set {
            $this->assigning('webhookUrl', $value);
            $this->webhookUrl = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\MessageChannel::from($value) : parent::assignMember($name, $value),
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'messagePersistencePolicy' => is_string($value) ? $this->messagePersistencePolicy = \InfobipSDK\Enums\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\MessagePersistencePolicy::from($value) : parent::assignMember($name, $value),
            'sessionTimeoutInSec' => is_int($value) ? $this->sessionTimeoutInSec = $value : parent::assignMember($name, $value),
            'webhookEventUrl' => is_string($value) ? $this->webhookEventUrl = $value : parent::assignMember($name, $value),
            'webhookUrl' => is_string($value) ? $this->webhookUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
