<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * Uploaded reference segment
 */
final class MmsAdvancedMessageSegmentUploadReference extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'contentId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
];

    protected const array WRITE_ONLY_FIELDS = [
    'contentId',
    'uploadedContentId',
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
     * ID of previously uploaded binary content.
     * Documentation: https://www.infobip.com/docs/api/channels/mms/upload-binary
     */
    public string $uploadedContentId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentId' => is_string($value) ? $this->contentId = $value : parent::assignMember($name, $value),
            'uploadedContentId' => is_string($value) ? $this->uploadedContentId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
