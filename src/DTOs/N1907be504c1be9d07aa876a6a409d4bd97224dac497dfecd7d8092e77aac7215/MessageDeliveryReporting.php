<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215;

/**
 * MessageDeliveryReporting
 *
 * Provides options for configuring the delivery report behavior.
 */
final class MessageDeliveryReporting extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The real-time intermediate delivery report containing GSM error codes, messages status, pricing, network and country codes, etc., which will be sent on your callback server. Defaults to `false`.
     */
    public bool $intermediateReport;
    /**
     * Notify enables you to specify your preferences for receiving DLRs. If set to false, no DLR will be sent. Note: When no webhook is specified in the request and notify is set to 'true' or not defined, your Subscription settings will apply.
     */
    public bool $notify;
    /**
     * The URL on your call back server where a delivery report will be sent. If your URL becomes unavailable then the [retry cycle](https://www.infobip.com/docs/sms/sms-over-api#push-retry-cycle-notify-url) uses the following formula: `1min + (1min * retryNumber * retryNumber)`.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'intermediateReport' => is_bool($value) ? $this->intermediateReport = $value : parent::assignMember($name, $value),
            'notify' => is_bool($value) ? $this->notify = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
