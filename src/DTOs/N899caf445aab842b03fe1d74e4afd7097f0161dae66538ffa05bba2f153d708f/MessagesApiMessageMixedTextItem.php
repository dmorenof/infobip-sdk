<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * Text
 *
 * Supported by MMS
 */
final class MessagesApiMessageMixedTextItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'text',
    ];

    protected const array VALIDATION = [
        'text' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Custom content identifier for the text item. Supported by MMS only (Apple ignores).
     */
    public string $contentId;
    /**
     * Text to be sent.
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
            'contentId' => is_string($value) ? $this->contentId = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
