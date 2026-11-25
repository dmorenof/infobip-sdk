<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiDelivery
 *
 * Provides options for configuring the delivery report behavior.
 */
final class MessagesApiDelivery extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The real-time intermediate delivery report containing GSM error codes, messages status, pricing, network and country codes, etc., which will be sent on your callback server. The default setting is `false`.
     */
    public bool $intermediateReport;
    /**
     * Allows you to receive delivery reports for all triggered failover steps, not just the final one (either the first successful or the last failed step). The default setting is `false`.
     */
    public bool $receiveTriggeredFailoverReports;
    /**
     * The URL on your call back server where a delivery report will be sent. If your URL becomes unavailable then the [retry cycle](https://www.infobip.com/docs/sms/api#notify-url) uses the following formula: `1min + (1min * retryNumber * retryNumber)`.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'intermediateReport' => is_bool($value) ? $this->intermediateReport = $value : parent::assignMember($name, $value),
            'receiveTriggeredFailoverReports' => is_bool($value) ? $this->receiveTriggeredFailoverReports = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
