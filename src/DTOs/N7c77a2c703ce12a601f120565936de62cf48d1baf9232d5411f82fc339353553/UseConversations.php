<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * UseConversations
 *
 * Used for forwarding messages to Conversations service.
 * Documentation: https://www.infobip.com/docs/conversations
 */
final class UseConversations extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'enabled',
];

    /**
     * Flag which indicates if this action should be enabled. If set to false, the effect will be the same as adding the conversations to unset which will remove the object.
     * Example: true
     */
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
