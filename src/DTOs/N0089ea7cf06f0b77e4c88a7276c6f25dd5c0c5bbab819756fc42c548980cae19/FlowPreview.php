<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19;

/**
 * FlowPreview
 */
final class FlowPreview extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'expiresAt',
        'previewUrl',
    ];

    protected const array VALIDATION = [
        'previewUrl' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Time when the link will expire and the developer needs to call the API again to get a new link. Has the following format: yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     * Example: "2023-05-21T11:18:09Z"
     * Format: date-time
     */
    public string $expiresAt;
    /**
     * Link for the preview page.
     * Example: "https://example.com/"
     */
    public string $previewUrl {
        set {
            $this->assigning('previewUrl', $value);
            $this->previewUrl = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expiresAt' => is_string($value) ? $this->expiresAt = $value : parent::assignMember($name, $value),
            'previewUrl' => is_string($value) ? $this->previewUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
