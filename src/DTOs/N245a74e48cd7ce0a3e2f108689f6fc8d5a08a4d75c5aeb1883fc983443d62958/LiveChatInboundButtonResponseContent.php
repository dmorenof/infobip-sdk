<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958;

/**
 * LiveChatInboundButtonResponseContent
 */
final class LiveChatInboundButtonResponseContent extends \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatInboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'text' => [
        'minLength' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Button payload.
     */
    public string $payload;
    public \InfobipSDK\Enums\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatButtonResponsePayloadType $payloadType;
    /**
     * Card button title.
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
            'payloadType' => is_string($value) ? $this->payloadType = \InfobipSDK\Enums\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatButtonResponsePayloadType::from($value) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
