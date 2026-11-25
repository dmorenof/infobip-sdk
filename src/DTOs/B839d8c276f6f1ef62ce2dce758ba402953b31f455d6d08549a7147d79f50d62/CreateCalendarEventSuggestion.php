<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * CreateCalendarEventSuggestion
 *
 * Opens the user's default calendar app and starts the new calendar event flow with the agent-specified event data pre-filled.
 */
final class CreateCalendarEventSuggestion extends \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Suggestion
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'description' => [
        'minLength' => 1,
        'maxLength' => 500,
    ],
    'postbackData' => [
        'minLength' => 1,
        'maxLength' => 2024,
    ],
    'text' => [
        'minLength' => 1,
        'maxLength' => 25,
    ],
    'title' => [
        'minLength' => 1,
        'maxLength' => 100,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Event description.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The date and time when the event ends.<br/>It must be in the future and after `startTime`. The required format is `yyyy-MM-dd'T'HH:mm:ss.SSSZ` (for example, `2030-03-03T17:00:00.000+01:00`).<br/>The displayed `endTime` may be affected by the device's default time zone.<br/>For best practices on date formats, refer to our [documentation](https://www.infobip.com/docs/essentials/api-essentials/integration-best-practices#date-formats-backward-compatibility).
     * Format: date-time
     */
    public string $endTime;
    /**
     * Value which is going to be sent as a reply to a suggestion.
     * Example: "REPLY"
     */
    public string $postbackData {
        set {
            $this->assigning('postbackData', $value);
            $this->postbackData = $value;
        }
    }
    /**
     * The date and time when the event starts.<br/>It must be in the future and before `endTime`. The required format is `yyyy-MM-dd'T'HH:mm:ss.SSSZ` (for example, `2030-03-03T15:00:00.000+01:00`).<br/>The displayed `startTime` may be affected by the device's default time zone.<br/>For best practices on date formats, refer to our [documentation](https://www.infobip.com/docs/essentials/api-essentials/integration-best-practices#date-formats-backward-compatibility).
     * Format: date-time
     */
    public string $startTime;
    /**
     * Suggestion text.
     * Example: "Pick one!"
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
    /**
     * Event title.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'postbackData' => is_string($value) ? $this->postbackData = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
