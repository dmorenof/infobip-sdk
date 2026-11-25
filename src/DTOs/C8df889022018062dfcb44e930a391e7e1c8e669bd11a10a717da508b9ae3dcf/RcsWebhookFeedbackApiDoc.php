<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * RcsWebhookFeedbackApiDoc
 *
 * Structured feedback for the resource order. Present only for UPDATE_REQUESTED, UPDATE_REQUESTED_BY_INTERNAL_REVIEWER and REJECTED statuses. Provided only when the `structuredFeedback` feature opt-in is enabled.
 */
final class RcsWebhookFeedbackApiDoc extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of validation errors for the requirement.
     */
    public \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaResourceOrderFeedbackApiDoc\ErrorsCollection $errors;
    /**
     * External key of the requirement the feedback refers to, referring to an RCS sender launch request property. Examples: `bannerUrl` (top-level property), `termsOfService.url` (nested property), `phones[0].phoneNumber` (property of an array item). See [Get RCS sender](/docs/api/channels/rcs/rcs-service-management/rcs-sender-management/get-rcs-sender).
     */
    public string $externalRequirementKey;
    /**
     * Key of the requirement the feedback refers to.
     */
    public string $requirementKey;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaResourceOrderFeedbackApiDoc\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\ResourceOrderFeedbackError::class)) : parent::assignMember($name, $value),
            'externalRequirementKey' => is_string($value) ? $this->externalRequirementKey = $value : parent::assignMember($name, $value),
            'requirementKey' => is_string($value) ? $this->requirementKey = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
