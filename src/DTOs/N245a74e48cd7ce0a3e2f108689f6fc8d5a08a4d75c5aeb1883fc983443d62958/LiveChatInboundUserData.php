<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958;

/**
 * LiveChatInboundUserData
 *
 * Data about the user who sent the message.
 */
final class LiveChatInboundUserData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'cdpPersonId',
    ];

    /**
     * Internal person ID in People.
     * Format: int64
     */
    public int $cdpPersonId;
    public \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatInboundUserIdentity $userIdentity;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cdpPersonId' => is_int($value) ? $this->cdpPersonId = $value : parent::assignMember($name, $value),
            'userIdentity' => $value instanceof \stdClass ? $this->userIdentity = new \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatInboundUserIdentity($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
