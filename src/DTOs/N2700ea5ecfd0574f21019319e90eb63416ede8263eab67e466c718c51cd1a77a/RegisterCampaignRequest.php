<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * RegisterCampaignRequest
 */
final class RegisterCampaignRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of the campaign priority you would like to use.
     * Documentation: https://www.infobip.com/docs/api/platform/numbers/number-registration/campaigns/get-campaign-priorities
     * Format: uuid
     */
    public string $priorityId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'priorityId' => is_string($value) ? $this->priorityId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
