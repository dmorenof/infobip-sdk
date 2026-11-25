<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Fccfa6f52b47dd30d36e2c1fad9bb5d494251b453352b21aeb7a407c6f1eeb5c;

/**
 * ApiReport
 *
 * List of API reports
 */
final class ApiReport extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'messageCount' => [
        'format' => 'int32',
    ],
];

    /**
     * Unique ID assigned to the request if messaging multiple recipients or sending multiple messages via a single API request.
     */
    public string $bulkId;
    /**
     * Callback data sent through callbackData field in Send PUSH notifications or Send bulk PUSH notifications API methods.
     */
    public string $callbackData;
    public \InfobipSDK\Enums\N999e23a63911c41e6f288f288564c4bc2e6a35a6f2a9edba53ecac8c52fe9339\OMNIChannel $channel;
    /**
     * Tells when the message was finished processing by Infobip (ie. delivered to destination, delivered to destination network, etc.)
     * Format: date-time
     */
    public string $doneAt;
    public \InfobipSDK\DTOs\Fccfa6f52b47dd30d36e2c1fad9bb5d494251b453352b21aeb7a407c6f1eeb5c\Error $error;
    /**
     * Information about country and network of the mobile device
     */
    public string $mccMnc;
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
     * The ID of the individual message for which the report is requested.
     */
    public string $messageId;
    public \InfobipSDK\DTOs\Fccfa6f52b47dd30d36e2c1fad9bb5d494251b453352b21aeb7a407c6f1eeb5c\Price $price;
    /**
     * Indicates when the message was sent. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $sentAt;
    public \InfobipSDK\DTOs\Fccfa6f52b47dd30d36e2c1fad9bb5d494251b453352b21aeb7a407c6f1eeb5c\Status $status;
    /**
     * The message destination address.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\N999e23a63911c41e6f288f288564c4bc2e6a35a6f2a9edba53ecac8c52fe9339\OMNIChannel::from($value) : parent::assignMember($name, $value),
            'doneAt' => is_string($value) ? $this->doneAt = $value : parent::assignMember($name, $value),
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\Fccfa6f52b47dd30d36e2c1fad9bb5d494251b453352b21aeb7a407c6f1eeb5c\Error($value) : parent::assignMember($name, $value),
            'mccMnc' => is_string($value) ? $this->mccMnc = $value : parent::assignMember($name, $value),
            'messageCount' => is_int($value) ? $this->messageCount = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\Fccfa6f52b47dd30d36e2c1fad9bb5d494251b453352b21aeb7a407c6f1eeb5c\Price($value) : parent::assignMember($name, $value),
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\Fccfa6f52b47dd30d36e2c1fad9bb5d494251b453352b21aeb7a407c6f1eeb5c\Status($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
