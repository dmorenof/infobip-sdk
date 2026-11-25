<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33;

/**
 * CampaignReference
 *
 * Campaign reference, if matched by the Infobip platform.
 */
final class CampaignReference extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'campaignId' => [
        'format' => 'int32',
    ],
    'versionId' => [
        'format' => 'int32',
    ],
];

    /**
     * ID that allows you to track, analyze, and show an aggregated overview and the performance of individual campaigns per sending channel.
     */
    public string $campaign;
    /**
     * ID of the campaign or flow.
     * Format: int32
     */
    public int $campaignId {
        set {
            $this->assigning('campaignId', $value);
            $this->campaignId = $value;
        }
    }
    /**
     * ID of the version of the campaign created over Infobip Portal.
     * Format: int32
     */
    public int $versionId {
        set {
            $this->assigning('versionId', $value);
            $this->versionId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'campaign' => is_string($value) ? $this->campaign = $value : parent::assignMember($name, $value),
            'campaignId' => is_int($value) ? $this->campaignId = $value : parent::assignMember($name, $value),
            'versionId' => is_int($value) ? $this->versionId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
