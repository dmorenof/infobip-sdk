<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * EmailUrlOptions
 *
 * Sets up [URL shortening](https://www.infobip.com/docs/url-shortening) and tracking feature.
 */
final class EmailUrlOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'trackingUrl' => [
        'pattern' => '',
    ],
];

    /**
     * Enable or disable open and click tracking. Passing true will only enable tracking and the statistics will be visible in the web interface alone. This can be explicitly overridden by `trackClicks` and `trackOpens`.
     */
    public bool $track;
    /**
     * This parameter enables or disables track click feature.
     */
    public bool $trackClicks;
    /**
     * This parameter enables or disables track open feature.
     */
    public bool $trackOpens;
    /**
     * This parameter specifies the position of the open tracking pixel within the email content. Allowed values are `TOP` and `BOTTOM`. If no value is provided, the default is `TOP`.
     */
    public string $trackingPixelPosition;
    /**
     * The URL on your callback server on which the open and click notifications will be sent. See [Tracking Notifications](https://www.infobip.com/docs/email/send-email-over-api#tracking-notifications) for details.
     */
    public string $trackingUrl {
        set {
            $this->assigning('trackingUrl', $value);
            $this->trackingUrl = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'track' => is_bool($value) ? $this->track = $value : parent::assignMember($name, $value),
            'trackClicks' => is_bool($value) ? $this->trackClicks = $value : parent::assignMember($name, $value),
            'trackOpens' => is_bool($value) ? $this->trackOpens = $value : parent::assignMember($name, $value),
            'trackingPixelPosition' => is_string($value) ? $this->trackingPixelPosition = $value : parent::assignMember($name, $value),
            'trackingUrl' => is_string($value) ? $this->trackingUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
