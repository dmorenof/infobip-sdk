<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * Attachment
 *
 * Component containing media reference.
 */
final class Attachment extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'mediaId',
        'type',
    ];

    protected const array VALIDATION = [
        'mediaId' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
    ];

    /**
     * Media ID of the attachment.
     */
    public string $mediaId {
        set {
            $this->assigning('mediaId', $value);
            $this->mediaId = $value;
        }
    }
    public \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\AttachmentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mediaId' => is_string($value) ? $this->mediaId = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\AttachmentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
