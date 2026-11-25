<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N977e3573b6848c404863a30ecae06e08186a75a9070af48acc4b4f99a371a9b7;

/**
 * ClickToCallApiRequest
 *
 * Click-to-call request object.
 */
final class ClickToCallApiRequest extends \Dmorenof\SdkRuntime\DTO
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
     * Array of click to call messages to be sent.
     */
    public \InfobipSDK\Collections\N977e3573b6848c404863a30ecae06e08186a75a9070af48acc4b4f99a371a9b7\ClickToCallApiRequest\MessagesCollection $messages {
        set {
            $this->assigning('messages', $value);
            $this->messages = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->messages = new \InfobipSDK\Collections\N977e3573b6848c404863a30ecae06e08186a75a9070af48acc4b4f99a371a9b7\ClickToCallApiRequest\MessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\ClickToCallApiMessage::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
