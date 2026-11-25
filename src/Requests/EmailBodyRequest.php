<?php

declare(strict_types=1);

namespace InfobipSDK\Requests;

final class EmailBodyRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'applicationId',
        'messageId',
        'to',
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'landingPagePlaceholders',
    ];

    /**
     * The ID of the application that represents your service, e.g. 2FA for login, 2FA for changing the password, etc.
     */
    public string $applicationId;
    /**
     * Use this parameter if you wish to override the sender from the [created](#channels/sms/create-2fa-email-message-template) Email message template parameter `from`.
     */
    public string $from;
    /**
     * Key value pairs that will be replaced when using personalized opt out landing page. Placeholder keys should NOT contain curly brackets and should NOT contain a `pin` placeholder. Valid example: `"landingPagePlaceholders":{"name":"John", "surname": "Smith"}`
     */
    public \InfobipSDK\Requests\AllOfSend2faPinCodeOverEmailBody\PlaceholdersMapRequest $landingPagePlaceholders;
    /**
     * The ID of the Email message template (message with the PIN placeholder) that is sent to the recipient.
     */
    public string $messageId;
    /**
     * Key value pairs that will be replaced during message sending. Placeholder keys should NOT contain curly brackets and should NOT contain a `pin` placeholder. Valid example: `"placeholders":{"firstName":"John"}`
     */
    public \InfobipSDK\Requests\AllOfSend2faPinCodeOverEmailBody\PlaceholdersMap\PlaceholdersMapRequest $placeholders;
    /**
     * Email address to which the 2FA message will be sent. Example: john.smith&#64;example.com.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
