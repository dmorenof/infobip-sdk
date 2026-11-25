<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1fab3d191d736425211a5879d4b2241fa0e80b8ab68239ab74531b9b6408a7a8;

/**
 * DeletionAcceptedResponse
 *
 * Response to an accepted request.
 */
final class DeletionAcceptedResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message',
    ];

    /**
     * `bulkId` of messages that you request to delete.
     */
    public string $bulkId;
    /**
     * `campaignId` of messages that you request to delete.
     */
    public string $campaignId;
    /**
     * Response wording.
     */
    public string $message;
    /**
     * The requested message ID when exactly one ID was supplied.
     */
    public string $messageId;
    /**
     * All requested message IDs when more than one was supplied.
     */
    public \InfobipSDK\Collections\StringCollection $messageIds;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'campaignId' => is_string($value) ? $this->campaignId = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'messageIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->messageIds = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
