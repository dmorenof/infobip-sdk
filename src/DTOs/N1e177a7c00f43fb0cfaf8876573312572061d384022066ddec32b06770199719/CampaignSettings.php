<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719;

/**
 * CampaignSettings
 */
final class CampaignSettings extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'maxDailyAttemptsPerCampaign' => [
        'minimum' => 1,
    ],
    'maxDailyAttemptsPerUser' => [
        'minimum' => 1,
    ],
];

    /**
     * Maximum number of times all users can participate in the campaign in one day.
     */
    public int $maxDailyAttemptsPerCampaign {
        set {
            $this->assigning('maxDailyAttemptsPerCampaign', $value);
            $this->maxDailyAttemptsPerCampaign = $value;
        }
    }
    /**
     * Maximum number of times a user can participate in the campaign in one day.
     */
    public int $maxDailyAttemptsPerUser {
        set {
            $this->assigning('maxDailyAttemptsPerUser', $value);
            $this->maxDailyAttemptsPerUser = $value;
        }
    }
    /**
     * Speech-to-text model provider used for the campaign. Currently, only 'AZURE' and 'GOOGLE' are supported.
     */
    public \InfobipSDK\Enums\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\STTModelProvider $sttModelProvider;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'maxDailyAttemptsPerCampaign' => is_int($value) ? $this->maxDailyAttemptsPerCampaign = $value : parent::assignMember($name, $value),
            'maxDailyAttemptsPerUser' => is_int($value) ? $this->maxDailyAttemptsPerUser = $value : parent::assignMember($name, $value),
            'sttModelProvider' => is_string($value) ? $this->sttModelProvider = \InfobipSDK\Enums\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\STTModelProvider::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
