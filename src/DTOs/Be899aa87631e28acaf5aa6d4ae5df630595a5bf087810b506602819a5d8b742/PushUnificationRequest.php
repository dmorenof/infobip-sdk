<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

/**
 * PushUnificationRequest
 */
final class PushUnificationRequest extends \Dmorenof\SdkRuntime\DTO
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
     * An array of message objects of a single message or multiple messages sent under one bulk ID.
     */
    public \InfobipSDK\Collections\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushUnificationRequest\MessagesCollection $messages {
        set {
            $this->assigning('messages', $value);
            $this->messages = $value;
        }
    }
    public \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushMessageRequestOptions $options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->messages = new \InfobipSDK\Collections\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushUnificationRequest\MessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushUnificationMessage::class)) : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushMessageRequestOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
