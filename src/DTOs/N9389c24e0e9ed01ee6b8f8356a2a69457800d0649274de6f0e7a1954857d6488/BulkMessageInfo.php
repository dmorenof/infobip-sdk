<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * BulkMessageInfo
 */
final class BulkMessageInfo extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID that uniquely identifies the request. Bulk ID will be received only when you send a message to more than one destination address.
     * Example: "2034072219640523073"
     */
    public string $bulkId;
    /**
     * Array of sent message objects, one object per every message.
     */
    public \InfobipSDK\Collections\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\BulkMessageInfo\MessagesCollection $messages;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->messages = new \InfobipSDK\Collections\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\BulkMessageInfo\MessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\SingleMessageInfo::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
