<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Afc47ed3ecce0d042db7648b2699b209de7fd712b3df90ffbf75e4058f683890\ApiRequestError;

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
