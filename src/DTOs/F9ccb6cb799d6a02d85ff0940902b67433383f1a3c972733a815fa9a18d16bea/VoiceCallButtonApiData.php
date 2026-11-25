<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * VoiceCallButtonApiData
 */
final class VoiceCallButtonApiData extends \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\ButtonApiData
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'callValidityPeriod' => [
            'minimum' => 1440,
            'maximum' => 43200,
            'format' => 'int32',
        ],
        'text' => [
            'minLength' => 0,
            'maxLength' => 25,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Time to live for the call button in minutes. Must be between 1440 (1 day) and 43200 (30 days).
     * Format: int32
     */
    public int $callValidityPeriod {
        set {
            $this->assigning('callValidityPeriod', $value);
            $this->callValidityPeriod = $value;
        }
    }
    /**
     * Button text.
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
            'callValidityPeriod' => is_int($value) ? $this->callValidityPeriod = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
