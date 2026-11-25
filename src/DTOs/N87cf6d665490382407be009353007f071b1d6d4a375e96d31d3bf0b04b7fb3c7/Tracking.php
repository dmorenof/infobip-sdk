<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N87cf6d665490382407be009353007f071b1d6d4a375e96d31d3bf0b04b7fb3c7;

/**
 * Tracking
 *
 * Sets up tracking parameters to track conversion metrics and type. This is a legacy feature not compatible with the `tracking` feature in latest [Send SMS message](#channels/sms/send-sms-messages) API.
 */
final class Tracking extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'baseUrl',
    'processKey',
    'track',
    'type',
];

    /**
     * Custom base URL for shortened links in messages when tracking URL conversions. Legacy - use `urlOptions` instead.
     */
    public string $baseUrl;
    /**
     * The process key which uniquely identifies conversion tracking.
     */
    public string $processKey;
    /**
     * Indicates if a message has to be tracked for conversion rates. Values are: `SMS` and `URL`. `URL` is a legacy value. Use `urlOptions` instead. For more details on SMS Conversion, see: [Track Conversion](https://www.infobip.com/docs/sms/api#track-conversion).
     */
    public string $track;
    /**
     * Sets a custom conversion type naming convention, e.g. `ONE_TIME_PIN` or `SOCIAL_INVITES`.
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'baseUrl' => is_string($value) ? $this->baseUrl = $value : parent::assignMember($name, $value),
            'processKey' => is_string($value) ? $this->processKey = $value : parent::assignMember($name, $value),
            'track' => is_string($value) ? $this->track = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
