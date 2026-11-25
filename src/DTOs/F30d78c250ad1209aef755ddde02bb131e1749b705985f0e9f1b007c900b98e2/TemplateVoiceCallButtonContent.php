<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * TemplateVoiceCallButtonContent
 */
final class TemplateVoiceCallButtonContent extends \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateButtonContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'callContextPayload' => [
        'minLength' => 1,
        'maxLength' => 512,
    ],
    'callValidityPeriod' => [
        'minimum' => 1,
        'maximum' => 43200,
        'format' => 'int32',
    ],
];

    /**
     * Payload data sent with the button. Can be retrieved from the call webhook.
     */
    public string $callContextPayload {
        set {
            $this->assigning('callContextPayload', $value);
            $this->callContextPayload = $value;
        }
    }
    /**
     * Time to live for the voice call button in minutes. Must be between 1 and 43200 (30 days). Default value is 10080 (7 days).
     * Format: int32
     */
    public int $callValidityPeriod {
        set {
            $this->assigning('callValidityPeriod', $value);
            $this->callValidityPeriod = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callContextPayload' => is_string($value) ? $this->callContextPayload = $value : parent::assignMember($name, $value),
            'callValidityPeriod' => is_int($value) ? $this->callValidityPeriod = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
