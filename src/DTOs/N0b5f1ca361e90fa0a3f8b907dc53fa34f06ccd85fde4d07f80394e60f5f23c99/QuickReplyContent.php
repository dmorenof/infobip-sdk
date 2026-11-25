<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * QuickReplyContent
 */
final class QuickReplyContent extends \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\InboundMessage
{
    public const array REQUIRED_FIELDS = [
    'payload',
    'text',
];

    protected const array VALIDATION = [
    'payload' => [
        'minLength' => 0,
        'maxLength' => 128,
    ],
    'text' => [
        'minLength' => 0,
        'maxLength' => 20,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Payload of the selected button.
     */
    public string $payload {
        set {
            $this->assigning('payload', $value);
            $this->payload = $value;
        }
    }
    /**
     * Text of the selected button.
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
            'payload' => is_string($value) ? $this->payload = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
