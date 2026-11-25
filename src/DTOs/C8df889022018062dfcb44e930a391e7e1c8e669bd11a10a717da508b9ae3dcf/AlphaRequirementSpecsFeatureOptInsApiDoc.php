<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * AlphaRequirementSpecsFeatureOptInsApiDoc
 *
 * Opt-in flags for optional features.
 */
final class AlphaRequirementSpecsFeatureOptInsApiDoc extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Opt-in to automatic document prefilling. When enabled, returned requirements include additional information needed by Infobip to automatically prefill country-specific registration documents where applicable.
     * Send the same value in `featureOptIns.documentPrefill` when submitting the resource request.
     * Defaults to false.
     */
    public bool $documentPrefill;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'documentPrefill' => is_bool($value) ? $this->documentPrefill = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
