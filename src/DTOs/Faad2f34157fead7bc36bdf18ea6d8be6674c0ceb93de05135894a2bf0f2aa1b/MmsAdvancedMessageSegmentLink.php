<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * Link segment
 */
final class MmsAdvancedMessageSegmentLink extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contentUrl',
    ];

    protected const array VALIDATION = [
        'contentId' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'contentUrl' => [
            'minLength' => 1,
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'contentId',
        'contentType',
        'contentUrl',
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
     * Content type for media, for example `image/png`.
     */
    public string $contentType;
    /**
     * URL of externally hosted content.
     */
    public string $contentUrl {
        set {
            $this->assigning('contentUrl', $value);
            $this->contentUrl = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentId' => is_string($value) ? $this->contentId = $value : parent::assignMember($name, $value),
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'contentUrl' => is_string($value) ? $this->contentUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
