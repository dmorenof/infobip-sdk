<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N31df1a57142f86aa8caefaa914e5a897a1c5c119e96ae8d3d5f19b12a525e2b7;

/**
 * Report
 */
class Report extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'messageCount' => [
            'format' => 'int32',
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'bulkId',
        'contact',
        'doneAt',
        'error',
        'messageCount',
        'messageId',
        'price',
        'sentAt',
        'status',
        'to',
    ];

    /**
     * The ID that uniquely identifies the request.
     */
    public string $bulkId;
    /**
     * End user contact.
     */
    public \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\DlrContact $contact;
    /**
     * Tells when the message was finished processing by Infobip (ie. delivered to destination, delivered to destination network, etc.).
     * Format: date-time
     */
    public string $doneAt;
    /**
     * Indicates whether the error occurred during the query execution.
     */
    public \InfobipSDK\DTOs\N3307df001c42dd833d79f33c79b6946b4d01c30ce33030254141df9a2298b3c8\Error $error;
    /**
     * The number of sent message segments.
     * Format: int32
     */
    public int $messageCount {
        set {
            $this->assigning('messageCount', $value);
            $this->messageCount = $value;
        }
    }
    /**
     * The ID that uniquely identifies the message sent.
     */
    public string $messageId;
    /**
     * Sent message price.
     */
    public \InfobipSDK\DTOs\N3307df001c42dd833d79f33c79b6946b4d01c30ce33030254141df9a2298b3c8\Price $price;
    /**
     * Tells when the message was sent. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $sentAt;
    /**
     * Indicates whether the message is successfully sent, not sent, delivered, not delivered, waiting for delivery or any other possible status.
     */
    public \InfobipSDK\DTOs\N3307df001c42dd833d79f33c79b6946b4d01c30ce33030254141df9a2298b3c8\Status $status;
    /**
     * The message destination address.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'contact' => $value instanceof \stdClass ? $this->contact = new \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\DlrContact($value) : parent::assignMember($name, $value),
            'doneAt' => is_string($value) ? $this->doneAt = $value : parent::assignMember($name, $value),
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\N3307df001c42dd833d79f33c79b6946b4d01c30ce33030254141df9a2298b3c8\Error($value) : parent::assignMember($name, $value),
            'messageCount' => is_int($value) ? $this->messageCount = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\N3307df001c42dd833d79f33c79b6946b4d01c30ce33030254141df9a2298b3c8\Price($value) : parent::assignMember($name, $value),
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\N3307df001c42dd833d79f33c79b6946b4d01c30ce33030254141df9a2298b3c8\Status($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
