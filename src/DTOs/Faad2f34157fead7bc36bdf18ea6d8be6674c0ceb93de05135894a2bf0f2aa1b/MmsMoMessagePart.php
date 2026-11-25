<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * MmsMoMessagePart
 *
 * Received message parts.
 */
final class MmsMoMessagePart extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique identifier within single message.
     */
    public string $contentId;
    /**
     * Content type for media, for example 'image/png'.
     */
    public string $contentType;
    public string $origin;
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentId' => is_string($value) ? $this->contentId = $value : parent::assignMember($name, $value),
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'origin' => is_string($value) ? $this->origin = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
