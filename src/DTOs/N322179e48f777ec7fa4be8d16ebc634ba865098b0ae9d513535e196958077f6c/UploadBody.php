<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c;

/**
 * UploadBody
 */
final class UploadBody extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'url' => [
        'pattern' => '',
    ],
];

    /**
     * Base64-encoded audio file content, provided instead of a URL. Max size is 4MB. The accepted file format is mp3.
     * Format: byte
     */
    public string $content;
    /**
     * URL of the audio file to upload. Max size is 4MB. The accepted file format is mp3.
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
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
