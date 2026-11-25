<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * ZaloMessage
 *
 * An array of message objects of a single message or multiple messages sent under one bulk ID.
 */
final class ZaloMessage extends \Dmorenof\SdkRuntime\DTO
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

    public \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloOutboundContent $content;
    /**
     * An array of destination objects for where messages are being sent. A valid destination is required.
     */
    public \InfobipSDK\Collections\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloMessage\DestinationsCollection $destinations {
        set {
            $this->assigning('destinations', $value);
            $this->destinations = $value;
        }
    }
    public \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloMessageOptions $options;
    /**
     * The sender ID. It can be alphanumeric or numeric (e.g., `CompanyName`). Make sure you don't exceed [character limit](https://www.infobip.com/docs/sms/get-started#sender-names).
     */
    public string $sender {
        set {
            $this->assigning('sender', $value);
            $this->sender = $value;
        }
    }
    public \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\Webhooks $webhooks;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destinations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->destinations = new \InfobipSDK\Collections\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloMessage\DestinationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ToDestination::class)) : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloMessageOptions($value) : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'webhooks' => $value instanceof \stdClass ? $this->webhooks = new \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\Webhooks($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
