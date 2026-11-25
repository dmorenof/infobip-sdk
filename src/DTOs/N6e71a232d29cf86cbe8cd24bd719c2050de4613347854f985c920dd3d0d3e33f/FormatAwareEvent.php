<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * Event with format
 */
final class FormatAwareEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'event',
        'format',
    ];

    public string $event;
    public string $format;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'event' => is_string($value) ? $this->event = $value : parent::assignMember($name, $value),
            'format' => is_string($value) ? $this->format = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
