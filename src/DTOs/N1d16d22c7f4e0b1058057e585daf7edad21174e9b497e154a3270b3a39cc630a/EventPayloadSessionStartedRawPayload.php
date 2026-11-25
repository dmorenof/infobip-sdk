<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * EventPayloadSessionStartedRawPayload
 *
 * Contains the event-specific data.
 */
final class EventPayloadSessionStartedRawPayload extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\InvokerInfo $invoker;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\PersonBasicInfo $person;
    /**
     * Unique identifier of the web session.
     * Example: "sessionId"
     */
    public string $sessionId;
    /**
     * Timestamp when the session started.
     * Example: "2025-09-09T10:10:00.000Z"
     */
    public string $sessionStart;
    /**
     * Type of the session as reported by the SDK.
     * Example: "WEB"
     */
    public string $sessionType;
    /**
     * UTM campaign parameter specifying the campaign name or identifier.
     * Example: "summer_sale_2025"
     */
    public string $utmCampaign;
    /**
     * UTM content parameter to differentiate similar content or links.
     * Example: "variant_a"
     */
    public string $utmContent;
    /**
     * UTM medium parameter that identifies the marketing medium.
     * Example: "email"
     */
    public string $utmMedium;
    /**
     * UTM source parameter indicating the origin of the traffic.
     * Example: "google"
     */
    public string $utmSource;
    /**
     * UTM term parameter used for paid keyword tracking.
     * Example: "crm-platform"
     */
    public string $utmTerm;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'invoker' => $value instanceof \stdClass ? $this->invoker = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\InvokerInfo($value) : parent::assignMember($name, $value),
            'person' => $value instanceof \stdClass ? $this->person = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\PersonBasicInfo($value) : parent::assignMember($name, $value),
            'sessionId' => is_string($value) ? $this->sessionId = $value : parent::assignMember($name, $value),
            'sessionStart' => is_string($value) ? $this->sessionStart = $value : parent::assignMember($name, $value),
            'sessionType' => is_string($value) ? $this->sessionType = $value : parent::assignMember($name, $value),
            'utmCampaign' => is_string($value) ? $this->utmCampaign = $value : parent::assignMember($name, $value),
            'utmContent' => is_string($value) ? $this->utmContent = $value : parent::assignMember($name, $value),
            'utmMedium' => is_string($value) ? $this->utmMedium = $value : parent::assignMember($name, $value),
            'utmSource' => is_string($value) ? $this->utmSource = $value : parent::assignMember($name, $value),
            'utmTerm' => is_string($value) ? $this->utmTerm = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
