<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * TestingStartRequest
 * Example: {"botId":123,"sender":"12343534","webhookUrl":"http://example.com"}
 */
final class TestingStartRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'botId',
    'webhookUrl',
];

    protected const array VALIDATION = [
    'webhookUrl' => [
        'minLength' => 1,
    ],
];

    /**
     * Chatbot Id.
     * Format: int64
     */
    public int $botId;
    /**
     * Chatbot sender, if omitted will default to WEB_SIMULATION.
     */
    public string $sender;
    /**
     * Url to send bot test events.
     */
    public string $webhookUrl {
        set {
            $this->assigning('webhookUrl', $value);
            $this->webhookUrl = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'botId' => is_int($value) ? $this->botId = $value : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'webhookUrl' => is_string($value) ? $this->webhookUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
