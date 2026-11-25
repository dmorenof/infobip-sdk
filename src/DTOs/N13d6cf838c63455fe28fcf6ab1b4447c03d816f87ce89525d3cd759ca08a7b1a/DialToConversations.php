<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * Dial To Conversations
 *
 * Dial to Conversations action performs a call redirection to the [Infobip Conversations platform](https://www.infobip.com/docs/conversations), joining the user’s call with an agent. Dial to Conversations must be the last action.
 */
final class DialToConversations extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'dialToConversations',
];

    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\DialToConversationsData $dialToConversations;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dialToConversations' => $value instanceof \stdClass ? $this->dialToConversations = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\DialToConversationsData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
