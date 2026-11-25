<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * ServiceException
 *
 * Service exception object containing error details.
 */
final class ServiceException extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Identifier of the error.
     * Example: "UNAUTHORIZED"
     */
    public string $messageId;
    /**
     * Detailed error description.
     * Example: "Invalid login details"
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
