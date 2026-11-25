<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * EmailToDestination
 *
 * List of BCC recipient email addresses.
 */
final class EmailToDestination extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'destination',
];

    protected const array VALIDATION = [
    'messageId' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
];

    /**
     * Email address of the recipient in a form of `john.smith&#64;somecompany.com`
     */
    public string $destination;
    /**
     * The ID that uniquely identifies the message sent to a recipient.
     */
    public string $messageId {
        set {
            $this->assigning('messageId', $value);
            $this->messageId = $value;
        }
    }
    /**
     * As optional feature, a specific placeholder can be defined whose value will apply only for this destination. Value should be defined as: `{"name": "John"}`.
     */
    public string $placeholders;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'placeholders' => is_string($value) ? $this->placeholders = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
