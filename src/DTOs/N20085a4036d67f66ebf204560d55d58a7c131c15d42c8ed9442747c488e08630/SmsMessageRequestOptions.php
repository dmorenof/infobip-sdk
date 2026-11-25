<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * SmsMessageRequestOptions
 *
 * Options applicable to all messages in the request.
 */
final class SmsMessageRequestOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\Tracking $conversionTracking;
    /**
     * Set to true to return `messageCount` in the response. The `messageCount` is an estimate number of expected SMS messages and may be adjusted during message processing. SMS messages have a character limit and messages longer than the limit may be split into multiple SMS. Not compatible with `binary` message content type.
     */
    public bool $includeSmsCountInResponse;
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\RequestSchedulingSettings $schedule;
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\UrlOptions $tracking;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conversionTracking' => $value instanceof \stdClass ? $this->conversionTracking = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\Tracking($value) : parent::assignMember($name, $value),
            'includeSmsCountInResponse' => is_bool($value) ? $this->includeSmsCountInResponse = $value : parent::assignMember($name, $value),
            'schedule' => $value instanceof \stdClass ? $this->schedule = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\RequestSchedulingSettings($value) : parent::assignMember($name, $value),
            'tracking' => $value instanceof \stdClass ? $this->tracking = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\UrlOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
