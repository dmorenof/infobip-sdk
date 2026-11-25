<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0;

/**
 * ApiRequestErrorDetails
 */
final class ApiRequestErrorDetails extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Identifier of the error.
     */
    public string $messageId;
    /**
     * Detailed error description.
     */
    public string $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
