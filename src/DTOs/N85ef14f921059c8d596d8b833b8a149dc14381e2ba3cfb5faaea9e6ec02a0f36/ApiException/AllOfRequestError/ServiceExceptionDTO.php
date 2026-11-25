<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N85ef14f921059c8d596d8b833b8a149dc14381e2ba3cfb5faaea9e6ec02a0f36\ApiException\AllOfRequestError;

final class ServiceExceptionDTO extends \Dmorenof\SdkRuntime\DTO
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
