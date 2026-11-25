<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * Binary segment
 */
final class MmsAdvancedMessageSegmentBinary extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contentType',
    ];

    protected const array VALIDATION = [
        'contentId' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'contentType' => [
            'minLength' => 1,
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'contentBase64',
        'contentId',
        'contentType',
    ];

    /**
     * Content in Base64 format.
     */
    public string $contentBase64;
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
    public string $contentType {
        set {
            $this->assigning('contentType', $value);
            $this->contentType = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentBase64' => is_string($value) ? $this->contentBase64 = $value : parent::assignMember($name, $value),
            'contentId' => is_string($value) ? $this->contentId = $value : parent::assignMember($name, $value),
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
