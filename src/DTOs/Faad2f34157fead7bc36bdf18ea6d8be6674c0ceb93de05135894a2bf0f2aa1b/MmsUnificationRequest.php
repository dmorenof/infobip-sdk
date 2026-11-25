<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * MmsUnificationRequest
 */
final class MmsUnificationRequest extends \Dmorenof\SdkRuntime\DTO
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
    public \InfobipSDK\Collections\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsUnificationRequest\MessagesCollection $messages {
        set {
            $this->assigning('messages', $value);
            $this->messages = $value;
        }
    }
    public \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\DefaultMessageRequestOptions $options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->messages = new \InfobipSDK\Collections\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsUnificationRequest\MessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsUnificationMessage::class)) : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\DefaultMessageRequestOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
