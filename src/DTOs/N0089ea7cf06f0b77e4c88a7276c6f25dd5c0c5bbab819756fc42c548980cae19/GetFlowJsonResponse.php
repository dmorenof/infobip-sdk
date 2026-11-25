<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19;

/**
 * GetFlowJsonResponse
 */
final class GetFlowJsonResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'externalDownloadUrl',
];

    /**
     * External link to download the Flow JSON file.
     * Example: "https://example.com"
     */
    public string $externalDownloadUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'externalDownloadUrl' => is_string($value) ? $this->externalDownloadUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
