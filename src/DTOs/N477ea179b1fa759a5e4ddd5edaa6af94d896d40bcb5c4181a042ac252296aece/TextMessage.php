<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N477ea179b1fa759a5e4ddd5edaa6af94d896d40bcb5c4181a042ac252296aece;

/**
 * TextMessage
 */
final class TextMessage extends \InfobipSDK\DTOs\N477ea179b1fa759a5e4ddd5edaa6af94d896d40bcb5c4181a042ac252296aece\MoMessage
{
    public const array REQUIRED_FIELDS = [];

    protected const array WRITE_ONLY_FIELDS = [
        'pairedMessageId',
        'text',
        'trackingData',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Message ID of paired outgoing message if matched by Infobip platform.
     */
    public string $pairedMessageId;
    /**
     * Text of received message.
     */
    public string $text;
    /**
     * Viber's tracking data from outgoing message that end user replies to. Might be random string of characters if not set explicitly in outgoing message.
     */
    public string $trackingData;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'pairedMessageId' => is_string($value) ? $this->pairedMessageId = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'trackingData' => is_string($value) ? $this->trackingData = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
