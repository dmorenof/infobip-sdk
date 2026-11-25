<?php

declare(strict_types=1);

namespace InfobipSDK\Requests\AllOfResend2faPinCodeOverVoiceBody;

final class VoiceBodyRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'placeholders',
    'trackDelivery',
];

    /**
     * Key value pairs that will be replaced during message sending. Placeholder keys should NOT contain curly brackets and should NOT contain a `pin` placeholder. Valid example: `"placeholders":{"firstName":"John"}`
     */
    public \InfobipSDK\Requests\AllOfResend2faPinCodeOverVoiceBody\PlaceholdersMapRequest $placeholders;
    /**
     * Enables sending of delivery reports via [Subscriptions](https://www.infobip.com/docs/cpaas-x/subscriptions-management). The [retry cycle](https://www.infobip.com/docs/sms/sms-over-api#push-retry-cycle-notify-url) for when your URL becomes unavailable uses the following formula: `1min + (1min * retryNumber * retryNumber)`.
     */
    public bool $trackDelivery;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'trackDelivery' => is_bool($value) ? $this->trackDelivery = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
