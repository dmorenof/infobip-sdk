<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * RcsTemplateCreateCalendarEventSuggestion
 *
 * Opens the user's default calendar app and starts the new calendar event flow with the agent-specified event data pre-filled.
 */
final class RcsTemplateCreateCalendarEventSuggestion extends \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateSuggestion
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'description' => [
        'minLength' => 1,
        'maxLength' => 500,
    ],
    'endTime' => [
        'schema' => true,
        'jsonSchema' => '{"type":"object","oneOf":[{"type":"string"},{"type":"string"}]}',
    ],
    'postbackData' => [
        'minLength' => 1,
        'maxLength' => 2048,
    ],
    'startTime' => [
        'schema' => true,
        'jsonSchema' => '{"type":"object","oneOf":[{"type":"string"},{"type":"string"}]}',
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

    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The date and time when the event ends.<br/>It must be in the future and after `startTime`. The required format is `yyyy-MM-dd'T'HH:mm:ss.SSSZ` (for example, `2030-03-03T17:00:00.000+01:00`), or a {{placeholder}}<br/>The displayed `endTime` may be affected by the device's default time zone.<br/>For best practices on date formats, refer to our [documentation](https://www.infobip.com/docs/essentials/api-essentials/integration-best-practices#date-formats-backward-compatibility).
     */
    public mixed $endTime {
        set {
            $this->assigning('endTime', $value);
            $this->endTime = $value;
        }
    }
    public string $postbackData {
        set {
            $this->assigning('postbackData', $value);
            $this->postbackData = $value;
        }
    }
    /**
     * The date and time when the event starts.<br/>It must be in the future and before `endTime`. The required format is `yyyy-MM-dd'T'HH:mm:ss.SSSZ` (for example, `2030-03-03T15:00:00.000+01:00`) or a {{placeholder}}. <br/>The displayed `startTime` may be affected by the device's default time zone.<br/>For best practices on date formats, refer to our [documentation](https://www.infobip.com/docs/essentials/api-essentials/integration-best-practices#date-formats-backward-compatibility).
     */
    public mixed $startTime {
        set {
            $this->assigning('startTime', $value);
            $this->startTime = $value;
        }
    }
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
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
            'postbackData' => is_string($value) ? $this->postbackData = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
