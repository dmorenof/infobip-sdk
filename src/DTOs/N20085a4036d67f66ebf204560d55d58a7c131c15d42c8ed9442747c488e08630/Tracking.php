<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * Tracking
 *
 * Allows you to set up tracking parameters to track conversion metrics. For more details, see: [SMS with conversion tracking](https://www.infobip.com/docs/sms/sms-over-api#send-sms-with-conversion-tracking).
 */
final class Tracking extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Sets a custom conversion type naming convention, e.g. `ONE_TIME_PIN` or `SOCIAL_INVITES`.
     */
    public string $conversionTrackingName;
    /**
     * Indicates if a message has to be tracked for conversion rates. Default "false".
     */
    public bool $useConversionTracking;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conversionTrackingName' => is_string($value) ? $this->conversionTrackingName = $value : parent::assignMember($name, $value),
            'useConversionTracking' => is_bool($value) ? $this->useConversionTracking = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
