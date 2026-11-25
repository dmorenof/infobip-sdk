<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215;

/**
 * NonMsisdnMessageFailoverOptions
 *
 * Message options.
 */
final class NonMsisdnMessageFailoverOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'campaignReferenceId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
];

    /**
     * ID that allows you to track, analyze, and show an aggregated overview and the performance of individual campaigns per sending channel.
     */
    public string $campaignReferenceId {
        set {
            $this->assigning('campaignReferenceId', $value);
            $this->campaignReferenceId = $value;
        }
    }
    public \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\DeliveryTimeWindow $deliveryTimeWindow;
    public \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\Platform $platform;
    public \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\NonMsisdnSmsFailover $smsFailover;
    public \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\ValidityPeriod $validityPeriod;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'campaignReferenceId' => is_string($value) ? $this->campaignReferenceId = $value : parent::assignMember($name, $value),
            'deliveryTimeWindow' => $value instanceof \stdClass ? $this->deliveryTimeWindow = new \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\DeliveryTimeWindow($value) : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\Platform($value) : parent::assignMember($name, $value),
            'smsFailover' => $value instanceof \stdClass ? $this->smsFailover = new \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\NonMsisdnSmsFailover($value) : parent::assignMember($name, $value),
            'validityPeriod' => $value instanceof \stdClass ? $this->validityPeriod = new \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\ValidityPeriod($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
