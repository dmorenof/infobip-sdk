<?php

declare(strict_types=1);

namespace InfobipSDK\Requests;

final class VoiceBodyRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'applicationId',
    'messageId',
    'to',
];

    protected const array WRITE_ONLY_FIELDS = [
    'applicationId',
    'messageId',
    'placeholders',
    'to',
    'trackDelivery',
];

    /**
     * The ID of the application that represents your service, e.g. 2FA for login, 2FA for changing the password, etc.
     */
    public string $applicationId;
    /**
     * Use this parameter if you wish to override the sender ID from the [created](#channels/sms/create-2fa-message-template) message template parameter `senderId`.
     */
    public string $from;
    /**
     * The ID of the message template (message body with the PIN placeholder) that is sent to the recipient.
     */
    public string $messageId;
    /**
     * Key value pairs that will be replaced during message sending. Placeholder keys should NOT contain curly brackets and should NOT contain a `pin` placeholder. Valid example: `"placeholders":{"firstName":"John"}`
     */
    public \InfobipSDK\Requests\AllOfSend2faPinCodeOverVoiceBody\PlaceholdersMapRequest $placeholders;
    /**
     * Phone number to which the 2FA message will be sent. Example: 41793026727.
     */
    public string $to;
    /**
     * Enables sending of delivery reports via [Subscriptions](https://www.infobip.com/docs/cpaas-x/subscriptions-management). The [retry cycle](https://www.infobip.com/docs/sms/sms-over-api#push-retry-cycle-notify-url) for when your URL becomes unavailable uses the following formula: `1min + (1min * retryNumber * retryNumber)`.
     */
    public bool $trackDelivery;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            'trackDelivery' => is_bool($value) ? $this->trackDelivery = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
