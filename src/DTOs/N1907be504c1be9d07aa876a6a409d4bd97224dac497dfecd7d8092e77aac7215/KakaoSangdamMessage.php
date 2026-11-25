<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215;

/**
 * KakaoSangdamMessage
 *
 * An array of message objects of a single message or multiple messages sent under one bulk ID.
 */
final class KakaoSangdamMessage extends \Dmorenof\SdkRuntime\DTO
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

    public \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamOutboundContent $content;
    /**
     * An array of destination objects for where messages are being sent. A valid destination is required.
     */
    public \InfobipSDK\Collections\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamMessage\DestinationsCollection $destinations {
        set {
            $this->assigning('destinations', $value);
            $this->destinations = $value;
        }
    }
    public \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\NonMsisdnMessageFailoverOptions $options;
    /**
     * Registered Kakao channel sender key.
     */
    public string $sender {
        set {
            $this->assigning('sender', $value);
            $this->sender = $value;
        }
    }
    public \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\Webhooks $webhooks;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destinations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->destinations = new \InfobipSDK\Collections\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamMessage\DestinationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\ToDestination::class)) : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\NonMsisdnMessageFailoverOptions($value) : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'webhooks' => $value instanceof \stdClass ? $this->webhooks = new \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\Webhooks($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
