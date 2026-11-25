<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * AdvancedMessageDeliveryReporting
 *
 * Provides options for configuring the delivery report behavior.
 */
final class AdvancedMessageDeliveryReporting extends \Dmorenof\SdkRuntime\DTO
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
     * Allows you to receive delivery reports for all triggered failover steps, not just the final one (either the first successful or the last failed step). The default setting is `false`.
     */
    public bool $receiveTriggeredFailoverReports;
    /**
     * The URL on your call back server where a delivery report will be sent. If your URL becomes unavailable then the [retry cycle](https://www.infobip.com/docs/sms/sms-over-api#push-retry-cycle-notify-url) uses the following formula: `1min + (1min * retryNumber * retryNumber)`.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'intermediateReport' => is_bool($value) ? $this->intermediateReport = $value : parent::assignMember($name, $value),
            'notify' => is_bool($value) ? $this->notify = $value : parent::assignMember($name, $value),
            'receiveTriggeredFailoverReports' => is_bool($value) ? $this->receiveTriggeredFailoverReports = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
