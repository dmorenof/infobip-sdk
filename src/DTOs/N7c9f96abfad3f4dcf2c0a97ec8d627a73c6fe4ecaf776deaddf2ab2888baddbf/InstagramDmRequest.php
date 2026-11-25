<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c9f96abfad3f4dcf2c0a97ec8d627a73c6fe4ecaf776deaddf2ab2888baddbf;

/**
 * InstagramDmRequest
 */
final class InstagramDmRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'messages',
    ];

    /**
     * An array of message objects of a single message or multiple messages sent under one bulk ID.
     */
    public \InfobipSDK\Collections\N7c9f96abfad3f4dcf2c0a97ec8d627a73c6fe4ecaf776deaddf2ab2888baddbf\InstagramDmRequest\MessagesCollection $messages;
    public \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\InstagramDmMessageRequestOptions $options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->messages = new \InfobipSDK\Collections\N7c9f96abfad3f4dcf2c0a97ec8d627a73c6fe4ecaf776deaddf2ab2888baddbf\InstagramDmRequest\MessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\InstagramDmMessage::class)) : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\InstagramDmMessageRequestOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
