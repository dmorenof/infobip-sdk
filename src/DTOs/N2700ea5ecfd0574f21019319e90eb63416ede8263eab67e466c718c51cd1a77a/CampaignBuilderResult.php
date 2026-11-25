<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * CampaignBuilderResult
 *
 * Response containing the campaign builder job status and result.
 */
final class CampaignBuilderResult extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Error message. Present only when status is FAILED.
     */
    public string $error;
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderResultData $result;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderResultStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => is_string($value) ? $this->error = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderResultStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
