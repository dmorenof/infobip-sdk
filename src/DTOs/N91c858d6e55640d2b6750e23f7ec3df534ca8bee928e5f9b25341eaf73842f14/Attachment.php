<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * Attachment
 *
 * Attachments list.
 */
final class Attachment extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'downloadId',
    'fileName',
    'url',
];

    protected const array VALIDATION = [
    'downloadId' => [
        'minLength' => 1,
    ],
    'fileName' => [
        'minLength' => 1,
    ],
    'url' => [
        'minLength' => 1,
    ],
];

    /**
     * Download identifier of the attachment.
     */
    public string $downloadId {
        set {
            $this->assigning('downloadId', $value);
            $this->downloadId = $value;
        }
    }
    /**
     * Name of the attachment.
     */
    public string $fileName {
        set {
            $this->assigning('fileName', $value);
            $this->fileName = $value;
        }
    }
    /**
     * URL of the attachment.
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'downloadId' => is_string($value) ? $this->downloadId = $value : parent::assignMember($name, $value),
            'fileName' => is_string($value) ? $this->fileName = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
