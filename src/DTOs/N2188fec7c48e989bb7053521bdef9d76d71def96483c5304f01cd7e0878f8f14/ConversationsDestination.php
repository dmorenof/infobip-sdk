<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * ConversationsDestination
 */
final class ConversationsDestination extends \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Destination
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Destination display name, if defined, that the call Link UI will use instead of an agent name. If a destination display name is an empty string, the UI will hide it.
     */
    public string $displayName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
