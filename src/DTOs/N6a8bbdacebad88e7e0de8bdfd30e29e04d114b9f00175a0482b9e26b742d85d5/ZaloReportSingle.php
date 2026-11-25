<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * ZaloReportSingle
 */
final class ZaloReportSingle extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bulkId',
        'channel',
        'messageId',
        'to',
    ];

    protected const array VALIDATION = [
        'messageCount' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Application used in request.
     * Example: "my-application-id"
     */
    public string $applicationId;
    /**
     * Unique ID assigned to the request if messaging multiple recipients or sending multiple messages via a single API request.
     * Example: "BULK-ID-123-xyz"
     */
    public string $bulkId;
    /**
     * Callback data sent through `callbackData` field in message.
     * Example: "my-reference"
     */
    public string $callbackData;
    /**
     * The channel used for delivering the message.
     * Example: "ZALO_NOTIFICATION_SERVICE"
     */
    public string $channel;
    /**
     * Indicates whether message processing was finished by Infobip (i.e., delivered to the destination, delivered to the destination network, etc.). Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Example: "2019-11-09T16:00:00.000+0000"
     */
    public string $doneAt;
    /**
     * Entity used in request.
     * Example: "my-entity-id"
     */
    public string $entityId;
    public \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ErrorReport $error;
    /**
     * Mobile country and network codes.
     */
    public string $mccMnc;
    /**
     * The number of messages were charged for this message request.
     * Example: 1
     * Format: int32
     */
    public int $messageCount {
        set {
            $this->assigning('messageCount', $value);
            $this->messageCount = $value;
        }
    }
    /**
     * Unique message ID.
     * Example: "45db39c3-7822-4e72-a3ec-c87442c0ffz9"
     */
    public string $messageId;
    public \InfobipSDK\DTOs\N270617dafe939f994767f4b01223addd34979b1c67bb145186dac4c5c875ab19\Price $price;
    /**
     * Indicates whether the message was sent. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Example: "2019-11-09T16:00:00.000+0000"
     */
    public string $sentAt;
    public \InfobipSDK\DTOs\N270617dafe939f994767f4b01223addd34979b1c67bb145186dac4c5c875ab19\Status $status;
    /**
     * Message destination address.
     * Example: "41793026727"
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = $value : parent::assignMember($name, $value),
            'doneAt' => is_string($value) ? $this->doneAt = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ErrorReport($value) : parent::assignMember($name, $value),
            'mccMnc' => is_string($value) ? $this->mccMnc = $value : parent::assignMember($name, $value),
            'messageCount' => is_int($value) ? $this->messageCount = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\N270617dafe939f994767f4b01223addd34979b1c67bb145186dac4c5c875ab19\Price($value) : parent::assignMember($name, $value),
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\N270617dafe939f994767f4b01223addd34979b1c67bb145186dac4c5c875ab19\Status($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
