<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * Text segment
 */
final class MmsMoTextSegment extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Content type of the message segment `text/plain`.
     */
    public string $contentType;
    /**
     * Message text.
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
