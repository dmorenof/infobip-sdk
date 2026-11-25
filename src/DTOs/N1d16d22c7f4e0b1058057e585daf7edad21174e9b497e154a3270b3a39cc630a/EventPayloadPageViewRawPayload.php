<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * EventPayloadPageViewRawPayload
 *
 * Contains the event-specific data.
 */
final class EventPayloadPageViewRawPayload extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Latitude associated with the network's ASN.
     * Example: "asnLatitude"
     */
    public string $asnLatitude;
    /**
     * Longitude associated with the network's ASN.
     * Example: "asnLongitude"
     */
    public string $asnLongitude;
    /**
     * Preferred language reported by the browser.
     * Example: "en-US"
     */
    public string $browserLanguage;
    /**
     * Name of the browser.
     * Example: "Chrome"
     */
    public string $browserName;
    /**
     * Operating system of the device.
     * Example: "Windows 11"
     */
    public string $browserOS;
    /**
     * Version of the browser.
     * Example: "140.0.7339.186"
     */
    public string $browserVersion;
    /**
     * Name of the city.
     * Example: "Zagreb"
     */
    public string $city;
    /**
     * Two letter ISO country code.
     * Example: "HR"
     */
    public string $countryCode;
    /**
     * Reported device category.
     * Example: "Mobile"
     */
    public string $deviceType;
    /**
     * Registered domain of the page.
     * Example: "example.com"
     */
    public string $domain;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\InvokerInfo $invoker;
    /**
     * The HTML document title of the page.
     * Example: "Example"
     */
    public string $pageTitle;
    /**
     * Path component of the URL.
     * Example: "/pricing"
     */
    public string $path;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\PersonBasicInfo $person;
    /**
     * Referring URL that sent the visitor to this page.
     * Example: "https://example.com"
     */
    public string $referrer;
    /**
     * Timestamp when the page view occurred.
     * Example: "2025-04-28T18:45:03.000Z"
     */
    public string $timestamp;
    /**
     * Absolute URL of the viewed page.
     * Example: "https://example.com/pricing"
     */
    public string $url;
    /**
     * Language of the website content.
     * Example: "en"
     */
    public string $websiteLanguage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'asnLatitude' => is_string($value) ? $this->asnLatitude = $value : parent::assignMember($name, $value),
            'asnLongitude' => is_string($value) ? $this->asnLongitude = $value : parent::assignMember($name, $value),
            'browserLanguage' => is_string($value) ? $this->browserLanguage = $value : parent::assignMember($name, $value),
            'browserName' => is_string($value) ? $this->browserName = $value : parent::assignMember($name, $value),
            'browserOS' => is_string($value) ? $this->browserOS = $value : parent::assignMember($name, $value),
            'browserVersion' => is_string($value) ? $this->browserVersion = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'deviceType' => is_string($value) ? $this->deviceType = $value : parent::assignMember($name, $value),
            'domain' => is_string($value) ? $this->domain = $value : parent::assignMember($name, $value),
            'invoker' => $value instanceof \stdClass ? $this->invoker = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\InvokerInfo($value) : parent::assignMember($name, $value),
            'pageTitle' => is_string($value) ? $this->pageTitle = $value : parent::assignMember($name, $value),
            'path' => is_string($value) ? $this->path = $value : parent::assignMember($name, $value),
            'person' => $value instanceof \stdClass ? $this->person = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\PersonBasicInfo($value) : parent::assignMember($name, $value),
            'referrer' => is_string($value) ? $this->referrer = $value : parent::assignMember($name, $value),
            'timestamp' => is_string($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'websiteLanguage' => is_string($value) ? $this->websiteLanguage = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
