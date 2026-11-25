<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * RoadsideAssistanceTextInboundContent
 */
final class RoadsideAssistanceTextInboundContent extends \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\RoadsideAssistanceInboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'messageNumber' => [
            'format' => 'int32',
        ],
        'text' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Number of the message in a conversation.
     * Format: int32
     */
    public int $messageNumber {
        set {
            $this->assigning('messageNumber', $value);
            $this->messageNumber = $value;
        }
    }
    /**
     * Received message text.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageNumber' => is_int($value) ? $this->messageNumber = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
