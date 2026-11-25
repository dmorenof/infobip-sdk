<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * BotInformationExample
 *
 * Details about bot.
 */
final class BotInformationExample extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'botId',
        'botName',
        'botSender',
        'channel',
        'testId',
    ];

    /**
     * Bot identifier.
     * Format: int64
     */
    public int $botId;
    /**
     * Bot name.
     */
    public string $botName;
    /**
     * Bot sender.
     */
    public string $botSender;
    public \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\TestingApiChannel $channel;
    /**
     * Test identifier.
     * Format: int64
     */
    public int $testId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'botId' => is_int($value) ? $this->botId = $value : parent::assignMember($name, $value),
            'botName' => is_string($value) ? $this->botName = $value : parent::assignMember($name, $value),
            'botSender' => is_string($value) ? $this->botSender = $value : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\TestingApiChannel::from($value) : parent::assignMember($name, $value),
            'testId' => is_int($value) ? $this->testId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
