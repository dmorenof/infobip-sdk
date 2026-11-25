<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958;

/**
 * LiveChatOutboundCustomDataContent
 */
final class LiveChatOutboundCustomDataContent extends \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatOutboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'agentMessage' => [
            'minLength' => 0,
            'maxLength' => 4096,
        ],
        'userMessage' => [
            'minLength' => 0,
            'maxLength' => 4096,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The message for the agent. Leave empty if no message should be displayed.
     */
    public string $agentMessage {
        set {
            $this->assigning('agentMessage', $value);
            $this->agentMessage = $value;
        }
    }
    /**
     * Custom data content.
     */
    public \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatOutboundCustomDataContent\CustomDataMap $customData;
    /**
     * The message for the customer. Leave empty if no message should be displayed.
     */
    public string $userMessage {
        set {
            $this->assigning('userMessage', $value);
            $this->userMessage = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'agentMessage' => is_string($value) ? $this->agentMessage = $value : parent::assignMember($name, $value),
            'userMessage' => is_string($value) ? $this->userMessage = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
