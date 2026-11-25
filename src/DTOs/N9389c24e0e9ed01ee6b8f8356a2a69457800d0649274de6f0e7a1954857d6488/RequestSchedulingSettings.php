<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * RequestSchedulingSettings
 *
 * Options for scheduling a message.
 */
final class RequestSchedulingSettings extends \Dmorenof\SdkRuntime\DTO
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
     * Date and time when the message is to be sent. Used for scheduled messages. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, and can only be scheduled for no later than 180 days in advance.
     * Format: date-time
     */
    public string $sendAt;
    public \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\SendingSpeedLimit $sendingSpeedLimit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'sendAt' => is_string($value) ? $this->sendAt = $value : parent::assignMember($name, $value),
            'sendingSpeedLimit' => $value instanceof \stdClass ? $this->sendingSpeedLimit = new \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\SendingSpeedLimit($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
