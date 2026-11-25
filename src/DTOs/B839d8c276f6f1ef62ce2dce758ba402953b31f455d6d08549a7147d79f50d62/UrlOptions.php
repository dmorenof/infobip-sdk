<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * UrlOptions
 *
 * Sets up [URL shortening](https://www.infobip.com/docs/url-shortening) and tracking feature.
 */
final class UrlOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Select a predefined custom domain to use when generating a short URL.
     */
    public string $customDomain;
    /**
     * Remove a protocol, such as `https://`, from links to shorten a message. Note that some mobiles may not recognize such links as a URL.
     */
    public bool $removeProtocol;
    /**
     * Enable shortening of the URLs within a message. Set this to `true`, if you want to set up other URL options.
     */
    public bool $shortenUrl;
    /**
     * Enable tracking of short URL clicks within a message: which URL was clicked, how many times, and by whom.
     */
    public bool $trackClicks;
    /**
     * The URL of your callback server on to which the Click report will be sent.
     */
    public string $trackingUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customDomain' => is_string($value) ? $this->customDomain = $value : parent::assignMember($name, $value),
            'removeProtocol' => is_bool($value) ? $this->removeProtocol = $value : parent::assignMember($name, $value),
            'shortenUrl' => is_bool($value) ? $this->shortenUrl = $value : parent::assignMember($name, $value),
            'trackClicks' => is_bool($value) ? $this->trackClicks = $value : parent::assignMember($name, $value),
            'trackingUrl' => is_string($value) ? $this->trackingUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
