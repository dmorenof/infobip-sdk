<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Ce93fb2fe51c89086b5064c5562c417f51be44b14f40606d3932f527a3fd02d9;

/**
 * SendResult
 */
final class SendResult extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'messages',
];

    /**
     * Unique bulk identifier.
     * Example: "1"
     */
    public string $bulkId;
    /**
     * General error description.
     */
    public string $errorMessage;
    /**
     * Array of sent message objects, one object per every message.
     */
    public \InfobipSDK\Collections\Ce93fb2fe51c89086b5064c5562c417f51be44b14f40606d3932f527a3fd02d9\SendResult\MessagesCollection $messages;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'errorMessage' => is_string($value) ? $this->errorMessage = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
