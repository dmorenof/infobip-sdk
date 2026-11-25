<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * KakaoChinguMessage
 *
 * An array of message objects of a single message or multiple messages sent under one bulk ID.
 */
final class KakaoChinguMessage extends \Dmorenof\SdkRuntime\DTO
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

    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\KakaoChinguOutboundContent $content;
    /**
     * An array of destination objects for where messages are being sent. A valid destination is required.
     */
    public \InfobipSDK\Collections\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\KakaoChinguMessage\DestinationsCollection $destinations {
        set {
            $this->assigning('destinations', $value);
            $this->destinations = $value;
        }
    }
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\KakaoMessageOptions $options;
    /**
     * The sender ID. It can be alphanumeric or numeric (e.g., `CompanyName`). Make sure you don't exceed [character limit](https://www.infobip.com/docs/sms/get-started#sender-names).
     */
    public string $sender {
        set {
            $this->assigning('sender', $value);
            $this->sender = $value;
        }
    }
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\AdvancedWebhooks $webhooks;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destinations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->destinations = new \InfobipSDK\Collections\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\KakaoChinguMessage\DestinationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\ToDestination::class)) : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\KakaoMessageOptions($value) : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'webhooks' => $value instanceof \stdClass ? $this->webhooks = new \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\AdvancedWebhooks($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
