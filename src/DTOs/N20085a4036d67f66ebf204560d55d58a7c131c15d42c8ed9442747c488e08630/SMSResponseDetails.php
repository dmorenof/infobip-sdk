<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * SMSResponseDetails
 *
 * An array of message objects of a single message or multiple messages sent under one bulk ID.
 */
final class SMSResponseDetails extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'smsCount' => [
            'format' => 'int32',
        ],
    ];

    protected const array READ_ONLY_FIELDS = [
        'messageId',
        'smsCount',
        'to',
    ];

    /**
     * Unique message ID. If not passed, it will be automatically generated and returned in a response.
     */
    public string $messageId;
    /**
     * Estimated number of SMS parts the message uses. The final count can differ; for the exact count, use the `smsCount` value in the delivery report.
     * Format: int32
     */
    public int $smsCount {
        set {
            $this->assigning('smsCount', $value);
            $this->smsCount = $value;
        }
    }
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\Status $status;
    /**
     * The destination address of the message.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'smsCount' => is_int($value) ? $this->smsCount = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\Status($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
