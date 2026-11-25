<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * LinkedConversation
 *
 * A pair of linked conversations.
 * Example: {"parentConversation":{"conversationId":"4461ea29-c09e-4ba8-a751-df86cf0a0eb9","createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00","agentId":"c856e230-a8cd-498b-9996-42bbed35029a","topic":"Billing inquiry","channel":"WHATSAPP","status":"OPEN","customerDisplayName":"John Doe"},"childConversation":{"conversationId":"e43bc422-09c9-4591-8b9d-82debcf04e0d","createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00","agentId":"c856e230-a8cd-498b-9996-42bbed35029a","topic":"Follow-up","channel":"LIVE_CHAT","status":"OPEN","customerDisplayName":"John Doe"}}
 */
final class LinkedConversation extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'childConversation',
    'parentConversation',
];

    public \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\LinkedConversationMember $childConversation;
    public \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\LinkedConversationMember $parentConversation;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'childConversation' => $value instanceof \stdClass ? $this->childConversation = new \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\LinkedConversationMember($value) : parent::assignMember($name, $value),
            'parentConversation' => $value instanceof \stdClass ? $this->parentConversation = new \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\LinkedConversationMember($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
