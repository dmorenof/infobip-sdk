<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMoEventTextContent
 */
final class MessagesApiMoEventTextContent extends \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMoEventContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Text of the message without the keyword (if a keyword was sent).
     */
    public string $cleanText;
    /**
     * Keyword extracted from the message text.
     */
    public string $keyword;
    /**
     * Text of the message.
     */
    public string $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cleanText' => is_string($value) ? $this->cleanText = $value : parent::assignMember($name, $value),
            'keyword' => is_string($value) ? $this->keyword = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
