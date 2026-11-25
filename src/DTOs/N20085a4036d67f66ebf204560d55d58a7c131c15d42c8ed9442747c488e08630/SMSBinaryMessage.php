<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * SMSBinaryMessage
 *
 * An array of message objects of a single message or multiple messages sent under one bulk ID.
 */
final class SMSBinaryMessage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destinations',
    ];

    protected const array VALIDATION = [
        'applicationId' => [
            'minLength' => 0,
            'maxLength' => 66,
        ],
        'callbackData' => [
            'minLength' => 0,
            'maxLength' => 4000,
        ],
        'campaignReferenceId' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'destinations' => [
            'minItems' => 1,
        ],
        'entityId' => [
            'minLength' => 0,
            'maxLength' => 66,
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'applicationId',
        'callbackData',
        'destinations',
        'entityId',
        'flash',
        'from',
        'intermediateReport',
        'notifyContentType',
        'notifyUrl',
        'sendAt',
        'validityPeriod',
    ];

    /**
     * Required for application use in a send request for outbound traffic. Returned in notification events. For more details, see our [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
     */
    public string $applicationId {
        set {
            $this->assigning('applicationId', $value);
            $this->applicationId = $value;
        }
    }
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\BinaryContent $binary;
    /**
     * Additional data that can be used for identifying, managing, or monitoring a message. Data included here will also be automatically included in the message [Delivery Report](#channels/sms/get-outbound-sms-message-delivery-reports). The maximum value is 4000 characters.
     */
    public string $callbackData {
        set {
            $this->assigning('callbackData', $value);
            $this->callbackData = $value;
        }
    }
    /**
     * ID that allows you to track, analyze, and show an aggregated overview and the performance of individual campaigns per sending channel.
     */
    public string $campaignReferenceId {
        set {
            $this->assigning('campaignReferenceId', $value);
            $this->campaignReferenceId = $value;
        }
    }
    public \InfobipSDK\DTOs\N87cf6d665490382407be009353007f071b1d6d4a375e96d31d3bf0b04b7fb3c7\DeliveryTimeWindow $deliveryTimeWindow;
    /**
     * An array of destination objects for where messages are being sent. A valid destination is required.
     */
    public \InfobipSDK\Collections\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\SMSBinaryMessage\DestinationsCollection $destinations {
        set {
            $this->assigning('destinations', $value);
            $this->destinations = $value;
        }
    }
    /**
     * Required for entity use in a send request for outbound traffic. Returned in notification events. For more details, see our [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
     */
    public string $entityId {
        set {
            $this->assigning('entityId', $value);
            $this->entityId = $value;
        }
    }
    /**
     * Allows for sending a [flash SMS](https://www.infobip.com/docs/sms/message-types#flash-sms) to automatically appear on recipient devices without interaction. Set to `true` to enable flash SMS, or leave the default value, `false` to send a standard SMS.
     */
    public bool $flash;
    /**
     * The sender ID which can be alphanumeric or numeric (e.g., `CompanyName`). Make sure you don't exceed [character limit](https://www.infobip.com/docs/sms/get-started#sender-names).
     */
    public string $from;
    /**
     * The [real-time intermediate delivery report](https://www.infobip.com/docs/api#channels/sms/receive-outbound-sms-message-report) containing GSM error codes, messages status, pricing, network and country codes, etc., which will be sent on your callback server. Defaults to `false`.
     */
    public bool $intermediateReport;
    /**
     * Preferred delivery report content type, `application/json` or `application/xml`.
     */
    public string $notifyContentType;
    /**
     * The URL on your call back server on which the Delivery report will be sent.
     * Documentation: #channels/sms/receive-outbound-sms-message-report
     */
    public string $notifyUrl;
    public \InfobipSDK\DTOs\N87cf6d665490382407be009353007f071b1d6d4a375e96d31d3bf0b04b7fb3c7\RegionalOptions $regional;
    /**
     * Date and time when the message is to be sent. Used for [scheduled SMS](https://www.infobip.com/docs/api#channels/sms/get-scheduled-sms-messages). Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, and can only be scheduled for no later than 180 days in advance.
     * Format: date-time
     */
    public string $sendAt;
    /**
     * The message validity period in minutes. When the period expires, it will not be allowed for the message to be sent. Validity period longer than 48h is not supported (in this case, it will be automatically set to 48h).
     * Format: int64
     */
    public int $validityPeriod;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'binary' => $value instanceof \stdClass ? $this->binary = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\BinaryContent($value) : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'campaignReferenceId' => is_string($value) ? $this->campaignReferenceId = $value : parent::assignMember($name, $value),
            'deliveryTimeWindow' => $value instanceof \stdClass ? $this->deliveryTimeWindow = new \InfobipSDK\DTOs\N87cf6d665490382407be009353007f071b1d6d4a375e96d31d3bf0b04b7fb3c7\DeliveryTimeWindow($value) : parent::assignMember($name, $value),
            'destinations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->destinations = new \InfobipSDK\Collections\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\SMSBinaryMessage\DestinationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\Destination::class)) : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'flash' => is_bool($value) ? $this->flash = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'intermediateReport' => is_bool($value) ? $this->intermediateReport = $value : parent::assignMember($name, $value),
            'notifyContentType' => is_string($value) ? $this->notifyContentType = $value : parent::assignMember($name, $value),
            'notifyUrl' => is_string($value) ? $this->notifyUrl = $value : parent::assignMember($name, $value),
            'regional' => $value instanceof \stdClass ? $this->regional = new \InfobipSDK\DTOs\N87cf6d665490382407be009353007f071b1d6d4a375e96d31d3bf0b04b7fb3c7\RegionalOptions($value) : parent::assignMember($name, $value),
            'sendAt' => is_string($value) ? $this->sendAt = $value : parent::assignMember($name, $value),
            'validityPeriod' => is_int($value) ? $this->validityPeriod = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
