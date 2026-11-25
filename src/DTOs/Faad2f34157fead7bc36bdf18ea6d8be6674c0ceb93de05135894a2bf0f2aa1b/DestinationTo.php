<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * Destination as to
 */
final class DestinationTo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'to',
    ];

    protected const array VALIDATION = [
        'to' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'messageId',
        'to',
    ];

    /**
     * The ID that uniquely identifies the message sent.
     */
    public string $messageId;
    /**
     * Message destination address. Addresses must be in international format (Example: `41793026727`).
     */
    public string $to {
        set {
            $this->assigning('to', $value);
            $this->to = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
