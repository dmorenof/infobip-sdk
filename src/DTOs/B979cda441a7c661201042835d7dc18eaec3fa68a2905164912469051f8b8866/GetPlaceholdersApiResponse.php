<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * GetPlaceholdersApiResponse
 * Example: {"type":"POSITION_IN_QUEUE","sayAs":"DEFAULT","placeholderValue":"{{QUEUE_POSITION_DEFAULT}}","placeholderPaddingSize":20,"requiresSSML":false}
 */
final class GetPlaceholdersApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'placeholderPaddingSize' => [
        'format' => 'int32',
    ],
];

    /**
     * Specifies how many characters will be added by the system in the background to correctly resolve the placeholder.
     *  This number is added to current TTS text length and counts toward max TTS text length.
     *
     * Format: int32
     */
    public int $placeholderPaddingSize {
        set {
            $this->assigning('placeholderPaddingSize', $value);
            $this->placeholderPaddingSize = $value;
        }
    }
    /**
     * Value to be placed in TTS text field which will be resolved in runtime to an actual value. This value is used to identify the placeholder.
     *  For example, {{QUEUE_POSITION_DEFAULT}} is a placeholder for the position in the queue with DEFAULT sayAs option.
     *  Here is example Text-to-Speech text: "You are {{QUEUE_POSITION_DEFAULT}} in the queue."
     *
     */
    public string $placeholderValue;
    /**
     * Specifies whether this placeholder requires TTS voice to support SSML.
     */
    public bool $requiresSSML;
    public \InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\TtsPlaceholderSayAsApiModel $sayAs;
    public \InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\TtsPlaceholderTypeApiModel $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'placeholderPaddingSize' => is_int($value) ? $this->placeholderPaddingSize = $value : parent::assignMember($name, $value),
            'placeholderValue' => is_string($value) ? $this->placeholderValue = $value : parent::assignMember($name, $value),
            'requiresSSML' => is_bool($value) ? $this->requiresSSML = $value : parent::assignMember($name, $value),
            'sayAs' => is_string($value) ? $this->sayAs = \InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\TtsPlaceholderSayAsApiModel::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\TtsPlaceholderTypeApiModel::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
