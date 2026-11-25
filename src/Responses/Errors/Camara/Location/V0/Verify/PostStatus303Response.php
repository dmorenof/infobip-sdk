<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Errors\Camara\Location\V0\Verify;

final class PostStatus303Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * URL to redirect user for consent. A blank/empty consentUrl means the consent form has already been delivered to the end user through another channel (e.g. SMS or the MNO app), so no redirect URL is provided.
     * Format: uri
     */
    public string $consentUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'consentUrl' => is_string($value) ? $this->consentUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
