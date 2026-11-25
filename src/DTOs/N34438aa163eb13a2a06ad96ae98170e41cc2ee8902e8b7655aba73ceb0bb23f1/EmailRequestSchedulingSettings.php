<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * EmailRequestSchedulingSettings
 *
 * Options for scheduling a message.
 */
final class EmailRequestSchedulingSettings extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'bulkId' => [
            'minLength' => 0,
            'maxLength' => 100,
        ],
    ];

    /**
     * Unique ID assigned to the request if messaging multiple recipients or sending multiple messages via a single API request. If not provided, it will be auto-generated and returned in the API response.
     */
    public string $bulkId {
        set {
            $this->assigning('bulkId', $value);
            $this->bulkId = $value;
        }
    }
    /**
     * Date and time when the message is to be sent. Used for scheduled messages. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, and can only be scheduled for no later than 5 days in advance.
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
