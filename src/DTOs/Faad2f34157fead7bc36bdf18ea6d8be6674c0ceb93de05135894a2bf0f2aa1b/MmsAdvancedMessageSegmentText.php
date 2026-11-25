<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * Text segment
 */
final class MmsAdvancedMessageSegmentText extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'contentId' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'contentId',
        'text',
    ];

    /**
     * Unique identifier within a single message. For the best delivery rate, use **up to 20 characters**, `A-Z`, `a-z`, `0-9`, `.` and `_`. Too long identifier with spaces and special characters may cause some mobile carriers to reject the message.
     */
    public string $contentId {
        set {
            $this->assigning('contentId', $value);
            $this->contentId = $value;
        }
    }
    /**
     * Message text.
     */
    public string $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentId' => is_string($value) ? $this->contentId = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
