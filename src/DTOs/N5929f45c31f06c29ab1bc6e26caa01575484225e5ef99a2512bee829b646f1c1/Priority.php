<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1;

/**
 * Priority
 *
 * Priorities of the senders that can be defined in case there is more than one sender for a destination country.
 */
final class Priority extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'priority',
        'senderType',
    ];

    protected const array VALIDATION = [
        'priority' => [
            'minimum' => 1,
            'maximum' => 4,
            'format' => 'int32',
        ],
    ];

    /**
     * Priority of sender type, from 1 to a maximum of 4. Lower number means higher priority.
     * Example: 1
     * Format: int32
     */
    public int $priority {
        set {
            $this->assigning('priority', $value);
            $this->priority = $value;
        }
    }
    public \InfobipSDK\Enums\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1\SenderType $senderType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'priority' => is_int($value) ? $this->priority = $value : parent::assignMember($name, $value),
            'senderType' => is_string($value) ? $this->senderType = \InfobipSDK\Enums\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1\SenderType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
