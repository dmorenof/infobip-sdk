<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * CallProperties
 *
 * Properties of the events that provide `Call` object.
 */
final class CallProperties extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Base URL of the API which you should invoke for all actions related to the call.
     */
    public string $apiBaseUrl;
    public \InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\Call $call;
    /**
     * Call diversion history. Contains information about the original destination and reason if the call was forwarded before reaching the final recipient.
     * Example: "forwardedFrom=[ForwardingInfo(number=41793026727, reason=unconditional)]"
     */
    public \InfobipSDK\Collections\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallProperties\ForwardedFromCollection $forwardedFrom;
    /**
     * The caller's display name as received with the inbound call. When the called number has CNAM delivery enabled, this field contains the resolved Caller ID Name (CNAM) associated with the calling party's phone number.
     * Example: "John Doe"
     */
    public string $resolvedCnam;
    public string $sender;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiBaseUrl' => is_string($value) ? $this->apiBaseUrl = $value : parent::assignMember($name, $value),
            'call' => $value instanceof \stdClass ? $this->call = new \InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\Call($value) : parent::assignMember($name, $value),
            'forwardedFrom' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->forwardedFrom = new \InfobipSDK\Collections\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallProperties\ForwardedFromCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ForwardingInfo::class)) : parent::assignMember($name, $value),
            'resolvedCnam' => is_string($value) ? $this->resolvedCnam = $value : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
