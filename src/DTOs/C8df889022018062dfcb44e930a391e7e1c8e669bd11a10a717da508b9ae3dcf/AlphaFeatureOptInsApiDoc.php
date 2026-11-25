<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * AlphaFeatureOptInsApiDoc
 *
 * Opt-in flags for optional features.
 */
final class AlphaFeatureOptInsApiDoc extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Opt-in to automatic document prefilling. Many countries require registration documents in country-specific formats. When enabled, Infobip automatically prefills these documents using the information provided in the resource request, reducing the need for manual document completion.
     *
     * Prefilling may require additional information that would otherwise need to be entered manually into registration documents. In most cases, the only remaining manual step is reviewing and signing the prefilled document.
     *
     * Documents that can be fully processed by Infobip are not returned to you. If a prefilled document requires your action, such as a signature, company stamp or printing on company letterhead, the resource request moves to the UPDATE_REQUESTED status shortly after submission. If no action is required from you, the registration continues without entering UPDATE_REQUESTED.
     *
     * When action is needed:
     * - `feedback` describes the required action (see `PREFILLED_DOC_SIGNATURE_REQUIRED`, `PREFILLED_DOC_STAMP_REQUIRED` and `PREFILLED_DOC_LETTERHEAD_REQUIRED` feedback keys).
     * - `additionalRequirements` contains the prefilled document (`attachment.documentType` is `PREFILLED_DOCUMENT`).
     * - Download the prefilled document, complete the required action, upload the resulting document, and update the resource request with all of its requirements, including the IDs of the uploaded documents.
     *
     * Requires `structuredFeedback`, which is enabled automatically. Sending `structuredFeedback` as `false` together with `documentPrefill` as `true` is rejected.
     * Defaults to false.
     */
    public bool $documentPrefill;
    /**
     * Opt-in to receive structured and standardized validation feedback. When enabled, for UPDATE_REQUESTED and UPDATE_REQUESTED_BY_INTERNAL_REVIEWER statuses feedback is returned in the structured `feedback` field instead of the open-ended-text `requirementsFeedback` field, and for the REJECTED status feedback is returned in the structured `feedback` field instead of the open-ended-text `note` field.
     * When enabled, resource requests that are auto-rejected for inactivity are set to the EXPIRED status instead of REJECTED.
     * Automatically enabled when `documentPrefill` is enabled.
     * Defaults to false.
     */
    public bool $structuredFeedback;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'documentPrefill' => is_bool($value) ? $this->documentPrefill = $value : parent::assignMember($name, $value),
            'structuredFeedback' => is_bool($value) ? $this->structuredFeedback = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
