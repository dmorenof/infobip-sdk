<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * MmsOutboundSmilSegment
 */
final class MmsOutboundSmilSegment extends \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsOutboundSegment
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'contentId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'contentType' => [
        'minLength' => 1,
    ],
    'smil' => [
        'minLength' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

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
     * Content type for media, for example `application/smil`.
     */
    public string $contentType {
        set {
            $this->assigning('contentType', $value);
            $this->contentType = $value;
        }
    }
    /**
     * Message segment as SMIL format. Be aware that some devices and/or operating systems ignore SMIL, so there is no guarantee that segments will be displayed as specified in SMIL format.
     */
    public string $smil {
        set {
            $this->assigning('smil', $value);
            $this->smil = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentId' => is_string($value) ? $this->contentId = $value : parent::assignMember($name, $value),
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'smil' => is_string($value) ? $this->smil = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
