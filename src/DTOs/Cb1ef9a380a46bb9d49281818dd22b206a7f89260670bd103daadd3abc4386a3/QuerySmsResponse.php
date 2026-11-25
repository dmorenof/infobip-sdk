<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Cb1ef9a380a46bb9d49281818dd22b206a7f89260670bd103daadd3abc4386a3;

/**
 * QuerySmsResponse
 */
final class QuerySmsResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
    'bulkId',
    'messages',
];

    /**
     * The ID that uniquely identifies the request. Bulk ID will be received only when a message is sent to more than one destination address.
     */
    public string $bulkId;
    /**
     * Array of sent message objects, one object per every message.
     */
    public \InfobipSDK\Collections\N33e5f9b198702dad16ca1f81c1bb567a11b08d145013a25f78031b56a52d656b\SMSResponse\MessagesCollection $messages;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->messages = new \InfobipSDK\Collections\N33e5f9b198702dad16ca1f81c1bb567a11b08d145013a25f78031b56a52d656b\SMSResponse\MessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\SMSResponseDetails::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
