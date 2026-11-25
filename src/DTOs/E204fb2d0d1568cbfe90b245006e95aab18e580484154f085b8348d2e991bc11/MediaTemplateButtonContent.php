<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * MediaTemplateButtonContent
 *
 * Media template buttons
 */
final class MediaTemplateButtonContent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'quickReplyPayload',
    'urlPlaceholder',
];

    /**
     * QuickReply payload. Required for quick reply buttons.
     */
    public string $quickReplyPayload;
    /**
     * URL placeholder. Required for URL buttons that have a parameterized URL.
     */
    public string $urlPlaceholder;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'quickReplyPayload' => is_string($value) ? $this->quickReplyPayload = $value : parent::assignMember($name, $value),
            'urlPlaceholder' => is_string($value) ? $this->urlPlaceholder = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
