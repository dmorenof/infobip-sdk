<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

/**
 * PushRequest
 *
 * List of push requests
 */
final class PushRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'from',
        'text',
        'to',
    ];

    protected const array VALIDATION = [
        'from' => [
            'minLength' => 1,
            'maxLength' => 80,
        ],
        'text' => [
            'minLength' => 1,
            'maxLength' => 4000,
        ],
        'validityPeriod' => [
            'minimum' => 0,
        ],
    ];

    /**
     * Additional client's data that will be sent onto `notifyUrl`. The maximum value is 200 characters.
     */
    public string $callbackData;
    /**
     * Additional data that can be delivered with the Push message. customPayload must be formatted as JSON object.
     */
    public \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushRequest\CustomPayloadMap $customPayload;
    /**
     * PUSH Application Code you are using to send messages. Application Code is the application identifier which links your mobile application to the [application profile](https://www.infobip.com/docs/mobile-push/get-started/mobile-application-profile#copy-application-code-create-and-enable-a-mobile-application-profile) created in Infobip Platform. It is required to insert the Application Code in Mobile Messaging SDK configuration once you implement it in your mobile application.
     */
    public string $from {
        set {
            $this->assigning('from', $value);
            $this->from = $value;
        }
    }
    public \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushRequestNotificationOptions $notificationOptions;
    /**
     * Preferred Delivery report content type. Supported content types: application/json, application/xml.
     */
    public string $notifyContentType;
    /**
     * The URL on your call back server on to which a delivery report will be sent. The retry cycle for when your URL becomes unavailable uses the following formula: `1min + (1min * retryNumber * retryNumber)`.
     */
    public string $notifyUrl;
    /**
     * Used for scheduled Push notifications. Message will be sent at scheduled time. Date and time when the message is to be sent. Has the following format: yyyy-MM-dd'T'HH:mm:ss.SSSZ, and can only be scheduled for no later than 180 days in advance.
     * Format: date-time
     */
    public string $sendAt;
    /**
     * Set to true to only send messages to push devices which are marked as primary devices. By default, messages will be sent to all targeted devices, including both primary and non-primary.
     */
    public bool $targetOnlyPrimaryDevices;
    /**
     * Text of the message that will be sent.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
    /**
     * Recipient destination address. [Check examples](https://www.infobip.com/docs/mobile-push/mobile-push-over-api) how to work with recipients
     */
    public \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushRequest\ToMap $to;
    /**
     * The message validity period. Unless specified differently in `validityPeriodTimeUnit`, it is expressed in hours. Once the period expires, messages that haven't left the Infobip platform or the Cloud (APNS or FCM) will be canceled and won't get delivered. Default value is 48h. Minimum value is 30 sec. Maximum value is 72h.
     * Format: int64
     */
    public int $validityPeriod {
        set {
            $this->assigning('validityPeriod', $value);
            $this->validityPeriod = $value;
        }
    }
    public \InfobipSDK\Enums\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\ValidityPeriodTimeUnit $validityPeriodTimeUnit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'notificationOptions' => $value instanceof \stdClass ? $this->notificationOptions = new \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushRequestNotificationOptions($value) : parent::assignMember($name, $value),
            'notifyContentType' => is_string($value) ? $this->notifyContentType = $value : parent::assignMember($name, $value),
            'notifyUrl' => is_string($value) ? $this->notifyUrl = $value : parent::assignMember($name, $value),
            'sendAt' => is_string($value) ? $this->sendAt = $value : parent::assignMember($name, $value),
            'targetOnlyPrimaryDevices' => is_bool($value) ? $this->targetOnlyPrimaryDevices = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'validityPeriod' => is_int($value) ? $this->validityPeriod = $value : parent::assignMember($name, $value),
            'validityPeriodTimeUnit' => is_string($value) ? $this->validityPeriodTimeUnit = \InfobipSDK\Enums\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\ValidityPeriodTimeUnit::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
