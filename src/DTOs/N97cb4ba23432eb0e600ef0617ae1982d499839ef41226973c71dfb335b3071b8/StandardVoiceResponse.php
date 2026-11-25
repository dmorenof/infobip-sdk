<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N97cb4ba23432eb0e600ef0617ae1982d499839ef41226973c71dfb335b3071b8;

/**
 * StandardVoiceResponse
 *
 * Voice response object
 */
final class StandardVoiceResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID that uniquely identifies the request. Bulk ID will be received only when you send a message to more than one destination address.
     */
    public string $bulkId;
    /**
     * Array of sent messages, one object per every message.
     */
    public \InfobipSDK\Collections\N97cb4ba23432eb0e600ef0617ae1982d499839ef41226973c71dfb335b3071b8\StandardVoiceResponse\MessagesCollection $messages;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->messages = new \InfobipSDK\Collections\N97cb4ba23432eb0e600ef0617ae1982d499839ef41226973c71dfb335b3071b8\StandardVoiceResponse\MessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\ResponseDetails::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
