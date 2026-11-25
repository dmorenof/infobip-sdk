<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * RcsSenderFeatureOptInsApiDoc
 *
 * Opt-in flags for optional features.
 */
final class RcsSenderFeatureOptInsApiDoc extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Opt-in to receive sender information updates on the RCS sender launch flow. When enabled, correct sender info directly through [Update an RCS sender](/docs/api/channels/rcs/rcs-service-management/rcs-sender-management/update-rcs-sender), then update the resource request, instead of submitting a new resource request.
     * When enabled, this opt-in also enables `structuredFeedback`, because the update loop for this feature needs the structured feedback model. If you set `structuredFeedback` to false and enable this opt-in, the request is rejected.
     * Defaults to false.
     */
    public bool $senderInfoUpdates;
    /**
     * Opt-in to receive structured and standardized validation feedback. When enabled, for UPDATE_REQUESTED and UPDATE_REQUESTED_BY_INTERNAL_REVIEWER statuses feedback is returned in the structured `feedback` field instead of the open-ended-text `requirementsFeedback` field, and for the REJECTED status feedback is returned in the structured `feedback` field instead of the open-ended-text `note` field.
     * When enabled, resource requests that are auto-rejected for inactivity are set to the EXPIRED status instead of REJECTED.
     * Automatically enabled when `senderInfoUpdates` is enabled.
     * Defaults to false.
     */
    public bool $structuredFeedback;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'senderInfoUpdates' => is_bool($value) ? $this->senderInfoUpdates = $value : parent::assignMember($name, $value),
            'structuredFeedback' => is_bool($value) ? $this->structuredFeedback = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
