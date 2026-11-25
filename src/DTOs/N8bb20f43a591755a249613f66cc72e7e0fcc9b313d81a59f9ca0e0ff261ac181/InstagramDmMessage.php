<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181;

/**
 * InstagramDmMessage
 *
 * An array of message objects of a single message or multiple messages sent under one bulk ID.
 */
final class InstagramDmMessage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
    'destinations',
    'sender',
];

    public \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\InstagramDmOutboundContent $content;
    /**
     * An array of destination objects for where messages are being sent. A valid destination is required.
     */
    public \InfobipSDK\Collections\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\InstagramDmMessage\DestinationsCollection $destinations;
    public \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\DefaultMessageOptions $options;
    /**
     * The sender ID. It can be alphanumeric or numeric (e.g., `CompanyName`). Make sure you don't exceed [character limit](https://www.infobip.com/docs/sms/get-started#sender-names).
     */
    public string $sender;
    public \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\Webhooks $webhooks;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destinations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->destinations = new \InfobipSDK\Collections\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\InstagramDmMessage\DestinationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\ToDestination::class)) : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\DefaultMessageOptions($value) : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'webhooks' => $value instanceof \stdClass ? $this->webhooks = new \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\Webhooks($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
