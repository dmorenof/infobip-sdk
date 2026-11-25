<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Aa47d40354ee197e21ffad52d2c543bd4f729e250360a844e476aa80deff7b6e;

/**
 * ResendPinRequest
 */
final class ResendPinRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'placeholders',
    'trackDelivery',
];

    /**
     * Key value pairs that will be replaced during message sending. Placeholder keys should NOT contain curly brackets and should NOT contain a `pin` placeholder. Valid example: `"placeholders":{"firstName":"John"}`
     */
    public \InfobipSDK\DTOs\Aa47d40354ee197e21ffad52d2c543bd4f729e250360a844e476aa80deff7b6e\ResendPinRequest\PlaceholdersMap $placeholders;
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
