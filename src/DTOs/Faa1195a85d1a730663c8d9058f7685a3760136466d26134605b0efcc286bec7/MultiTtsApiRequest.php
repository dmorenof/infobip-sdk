<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faa1195a85d1a730663c8d9058f7685a3760136466d26134605b0efcc286bec7;

/**
 * MultiTtsApiRequest
 *
 * Multiple voice messages request object.
 */
final class MultiTtsApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'messages',
];

    protected const array VALIDATION = [
    'messages' => [
        'minItems' => 1,
    ],
];

    /**
     * Array of messages to be sent, one per every message.
     */
    public \InfobipSDK\Collections\Faa1195a85d1a730663c8d9058f7685a3760136466d26134605b0efcc286bec7\MultiTtsApiRequest\MessagesCollection $messages {
        set {
            $this->assigning('messages', $value);
            $this->messages = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->messages = new \InfobipSDK\Collections\Faa1195a85d1a730663c8d9058f7685a3760136466d26134605b0efcc286bec7\MultiTtsApiRequest\MessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\MultiTtsApiMessage::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
