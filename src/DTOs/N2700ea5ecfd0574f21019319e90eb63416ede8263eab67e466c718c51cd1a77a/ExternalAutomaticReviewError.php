<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * ExternalAutomaticReviewError
 *
 * List of compliance errors found during the AI campaign review. Empty when the review is still processing or the campaign is compliant.
 */
final class ExternalAutomaticReviewError extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The error code identifying the type of compliance issue.
     */
    public string $code;
    /**
     * Description of the compliance issue.
     */
    public string $description;
    /**
     * The justification for why this was flagged as a compliance issue.
     */
    public string $justification;
    /**
     * The recommended action to resolve the compliance issue.
     */
    public string $recommendation;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'justification' => is_string($value) ? $this->justification = $value : parent::assignMember($name, $value),
            'recommendation' => is_string($value) ? $this->recommendation = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
