<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * Destination
 *
 * An array of destination objects for where messages are being sent. A valid destination is required.
 */
final class SmsToDestination extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'to',
];

    protected const array VALIDATION = [
    'messageId' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
    'networkId' => [
        'format' => 'int32',
    ],
    'to' => [
        'minLength' => 0,
        'maxLength' => 64,
    ],
];

    /**
     * The ID that uniquely identifies the message sent.
     */
    public string $messageId {
        set {
            $this->assigning('messageId', $value);
            $this->messageId = $value;
        }
    }
    /**
     * Available in US and Canada only if networkId is known for Network Operator of the destination. Returned in [SMS message delivery reports](https://www.infobip.com/docs/api/channels/sms/sms-messaging/logs-and-status-reports) and [Inbound SMS](https://www.infobip.com/docs/api/channels/sms/sms-messaging/inbound-sms); contact Infobip Support to enable.
     * Format: int32
     */
    public int $networkId {
        set {
            $this->assigning('networkId', $value);
            $this->networkId = $value;
        }
    }
    /**
     * The destination address of the message.
     */
    public string $to {
        set {
            $this->assigning('to', $value);
            $this->to = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'networkId' => is_int($value) ? $this->networkId = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
