<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * Preview
 *
 * Allows for previewing the original message content once additional language configuration has been applied to it.
 */
final class Preview extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'charactersRemaining' => [
        'format' => 'int32',
    ],
    'messageCount' => [
        'format' => 'int32',
    ],
];

    /**
     * Number of remaining characters in the last part of the SMS.
     * Format: int32
     */
    public int $charactersRemaining {
        set {
            $this->assigning('charactersRemaining', $value);
            $this->charactersRemaining = $value;
        }
    }
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\LanguageConfiguration $configuration;
    /**
     * Number of SMS message parts required to deliver the message.
     * Format: int32
     */
    public int $messageCount {
        set {
            $this->assigning('messageCount', $value);
            $this->messageCount = $value;
        }
    }
    /**
     * Preview of the message content as it should appear on the recipient’s device.
     */
    public string $textPreview;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'charactersRemaining' => is_int($value) ? $this->charactersRemaining = $value : parent::assignMember($name, $value),
            'configuration' => $value instanceof \stdClass ? $this->configuration = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\LanguageConfiguration($value) : parent::assignMember($name, $value),
            'messageCount' => is_int($value) ? $this->messageCount = $value : parent::assignMember($name, $value),
            'textPreview' => is_string($value) ? $this->textPreview = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
