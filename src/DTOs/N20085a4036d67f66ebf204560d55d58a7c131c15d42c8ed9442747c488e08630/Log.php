<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * Log
 *
 * Collection of logs.
 */
final class Log extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'smsCount' => [
        'format' => 'int32',
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'bulkId',
    'doneAt',
    'from',
    'mccMnc',
    'messageId',
    'sentAt',
    'smsCount',
    'text',
    'to',
];

    /**
     * Application id used to send the message. For more details, see our [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
     */
    public string $applicationId;
    /**
     * Unique ID assigned to the request if messaging multiple recipients or sending multiple messages via a single API request.
     */
    public string $bulkId;
    /**
     * ID of a campaign that was sent in the message.
     */
    public string $campaignReferenceId;
    /**
     * Date and time when the Infobip services finished processing the message (i.e. delivered to the destination, delivered to the destination network, etc.). Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $doneAt;
    /**
     * Entity id used to send the message. For more details, see our [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
     */
    public string $entityId;
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\LogError $error;
    /**
     * Sender ID that can be alphanumeric or numeric.
     */
    public string $from;
    /**
     * Mobile country and network codes.
     */
    public string $mccMnc;
    /**
     * Unique message ID.
     */
    public string $messageId;
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\LogPrice $price;
    /**
     * Date and time when the message was [scheduled](https://www.infobip.com/docs/api#channels/sms/get-scheduled-sms-messages) to be sent. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $sentAt;
    /**
     * The number of parts the message content was split into.
     * Format: int32
     */
    public int $smsCount {
        set {
            $this->assigning('smsCount', $value);
            $this->smsCount = $value;
        }
    }
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\LogStatus $status;
    /**
     * Content of the message being sent.
     */
    public string $text;
    /**
     * The destination address of the message.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'campaignReferenceId' => is_string($value) ? $this->campaignReferenceId = $value : parent::assignMember($name, $value),
            'doneAt' => is_string($value) ? $this->doneAt = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\LogError($value) : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'mccMnc' => is_string($value) ? $this->mccMnc = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\LogPrice($value) : parent::assignMember($name, $value),
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'smsCount' => is_int($value) ? $this->smsCount = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\LogStatus($value) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
