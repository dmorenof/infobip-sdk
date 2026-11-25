<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageOrderExpiration
 *
 * (WhatsApp specific) Expiration of the order.
 */
final class MessagesApiMessageOrderExpiration extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'minLength' => 0,
            'maxLength' => 120,
        ],
    ];

    /**
     * Description of the expiration.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Timestamp of the expiration. Must be at least 5 minutes in the future.
     * Format: date-time
     */
    public string $timestamp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'timestamp' => is_string($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
