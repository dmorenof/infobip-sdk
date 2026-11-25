<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181;

/**
 * InlineMessageReplyInstagramDmInboundContent
 */
final class InlineMessageReplyInstagramDmInboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public string $mid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mid' => is_string($value) ? $this->mid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
