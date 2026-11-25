<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * MmsAdvancedMessage
 *
 * An array of message objects of a single message or multiple messages sent under one bulk ID.
 */
final class MmsAdvancedMessage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destinations',
        'messageSegments',
    ];

    protected const array VALIDATION = [
        'applicationId' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'callbackData' => [
            'minLength' => 0,
            'maxLength' => 4000,
        ],
        'destinations' => [
            'minItems' => 1,
        ],
        'entityId' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'title' => [
            'minLength' => 0,
            'maxLength' => 66,
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'applicationId',
        'callbackData',
        'destinations',
        'entityId',
        'from',
        'intermediateReport',
        'messageSegments',
        'notifyUrl',
        'sendAt',
        'validityPeriod',
    ];

    /**
     * Required for application use in a send request for outbound traffic. Returned in notification events.
     */
    public string $applicationId {
        set {
            $this->assigning('applicationId', $value);
            $this->applicationId = $value;
        }
    }
    /**
     * Additional client data to be sent over the notifyUrl. The maximum value is 4000 characters.
     */
    public string $callbackData {
        set {
            $this->assigning('callbackData', $value);
            $this->callbackData = $value;
        }
    }
    public \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\DeliveryTimeWindow $deliveryTimeWindow;
    /**
     * An array of destination objects for where messages are being sent. Each object in array can be one of available options. A valid destination is required.
     */
    public \InfobipSDK\Collections\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsAdvancedMessage\DestinationsCollection $destinations {
        set {
            $this->assigning('destinations', $value);
            $this->destinations = $value;
        }
    }
    /**
     * Required for entity use in a send request for outbound traffic. Returned in notification events.
     */
    public string $entityId {
        set {
            $this->assigning('entityId', $value);
            $this->entityId = $value;
        }
    }
    /**
     * The sender ID which can be alphanumeric or numeric (e.g., `CompanyName`).
     */
    public string $from;
    /**
     * The [real-time intermediate delivery report](https://www.infobip.com/docs/api/channels/mms/get-outbound-mms-message-delivery-reports) containing GSM error codes, messages status, pricing, network and country codes, etc., which will be sent on your callback server. Defaults to `false`.
     */
    public bool $intermediateReport;
    /**
     * Content of the message being sent.
     */
    public \InfobipSDK\Collections\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsAdvancedMessage\MessageSegmentsCollection $messageSegments;
    /**
     * The URL on your call back server on to which a delivery report will be sent.
     * Documentation: https://www.infobip.com/docs/api/channels/mms/get-outbound-mms-message-delivery-reports
     */
    public string $notifyUrl;
    public \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\Regional $regional;
    /**
     * Date and time when the message is to be sent. Used for scheduled MMS. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $sendAt;
    /**
     * Message title.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }
    /**
     * The message validity period in minutes. When the period expires, it will not be allowed for the message to be sent. Validity period longer than 48h is not supported. Any bigger value will automatically default back to `2880`.
     * Format: int64
     */
    public int $validityPeriod;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'deliveryTimeWindow' => $value instanceof \stdClass ? $this->deliveryTimeWindow = new \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\DeliveryTimeWindow($value) : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'intermediateReport' => is_bool($value) ? $this->intermediateReport = $value : parent::assignMember($name, $value),
            'notifyUrl' => is_string($value) ? $this->notifyUrl = $value : parent::assignMember($name, $value),
            'regional' => $value instanceof \stdClass ? $this->regional = new \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\Regional($value) : parent::assignMember($name, $value),
            'sendAt' => is_string($value) ? $this->sendAt = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'validityPeriod' => is_int($value) ? $this->validityPeriod = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
