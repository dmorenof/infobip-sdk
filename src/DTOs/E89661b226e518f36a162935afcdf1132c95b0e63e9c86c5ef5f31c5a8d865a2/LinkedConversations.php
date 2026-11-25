<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * LinkedConversations
 *
 * Linked conversations response.
 */
final class LinkedConversations extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of linked conversation pairs.
     */
    public \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\LinkedConversations\LinkedConversationsCollection $linkedConversations;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'linkedConversations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->linkedConversations = new \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\LinkedConversations\LinkedConversationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\LinkedConversation::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
