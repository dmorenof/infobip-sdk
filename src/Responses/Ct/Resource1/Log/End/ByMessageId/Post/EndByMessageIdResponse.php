<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Ct\Resource1\Log\End\ByMessageId\Post;

final class EndByMessageIdResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Process key assigned to account ID.
     */
    public string $processKey;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'processKey' => is_string($value) ? $this->processKey = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
