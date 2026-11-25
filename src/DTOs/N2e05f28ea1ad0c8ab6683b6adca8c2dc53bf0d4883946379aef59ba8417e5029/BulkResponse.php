<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2e05f28ea1ad0c8ab6683b6adca8c2dc53bf0d4883946379aef59ba8417e5029;

/**
 * BulkResponse
 */
final class BulkResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique ID assigned to the request if messaging multiple recipients or sending multiple messages via a single API request.
     */
    public string $bulkId;
    /**
     * Date and time when the message is to be sent. Used for scheduled SMS (see [Scheduled SMS endpoints](#channels/sms/get-scheduled-sms-messages) for more details). Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, and can only be scheduled for no later than 180 days in advance.
     * Format: date-time
     */
    public string $sendAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'sendAt' => is_string($value) ? $this->sendAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
