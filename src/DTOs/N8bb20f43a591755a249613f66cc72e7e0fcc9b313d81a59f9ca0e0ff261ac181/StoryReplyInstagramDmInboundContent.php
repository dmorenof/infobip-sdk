<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181;

/**
 * StoryReplyInstagramDmInboundContent
 */
final class StoryReplyInstagramDmInboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\StoryInfoInboundContent $story;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'story' => $value instanceof \stdClass ? $this->story = new \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\StoryInfoInboundContent($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
