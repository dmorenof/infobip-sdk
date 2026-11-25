<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * WebFormPostResponse
 */
final class WebFormPostResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $conversationId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conversationId' => is_string($value) ? $this->conversationId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
