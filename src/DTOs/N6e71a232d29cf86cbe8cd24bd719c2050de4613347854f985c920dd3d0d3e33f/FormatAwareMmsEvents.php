<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * Event with format
 */
final class FormatAwareMmsEvents extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'event',
        'format',
    ];

    public \InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\FormatAwareMmsEvents\EventEnum $event;
    /**
     * Format which you want to assign to the event. For more information about available formats and their payload, check our [Event Formats](https://www.infobip.com/docs/cpaas-x/subscriptions-management/event-formats) page.
     */
    public string $format;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'event' => is_string($value) ? $this->event = \InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\FormatAwareMmsEvents\EventEnum::from($value) : parent::assignMember($name, $value),
            'format' => is_string($value) ? $this->format = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
