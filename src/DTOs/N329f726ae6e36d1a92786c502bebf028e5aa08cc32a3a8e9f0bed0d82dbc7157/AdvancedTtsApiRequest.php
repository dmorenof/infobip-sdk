<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N329f726ae6e36d1a92786c502bebf028e5aa08cc32a3a8e9f0bed0d82dbc7157;

/**
 * AdvancedTtsApiRequest
 *
 * Advanced voice message request object.
 */
final class AdvancedTtsApiRequest extends \Dmorenof\SdkRuntime\DTO
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
     * The ID which uniquely identifies the request.
     */
    public string $bulkId;
    /**
     * Array of messages to be sent, one object per every message
     */
    public \InfobipSDK\Collections\N329f726ae6e36d1a92786c502bebf028e5aa08cc32a3a8e9f0bed0d82dbc7157\AdvancedTtsApiRequest\MessagesCollection $messages {
        set {
            $this->assigning('messages', $value);
            $this->messages = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->messages = new \InfobipSDK\Collections\N329f726ae6e36d1a92786c502bebf028e5aa08cc32a3a8e9f0bed0d82dbc7157\AdvancedTtsApiRequest\MessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\AdvancedTtsApiMessage::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
