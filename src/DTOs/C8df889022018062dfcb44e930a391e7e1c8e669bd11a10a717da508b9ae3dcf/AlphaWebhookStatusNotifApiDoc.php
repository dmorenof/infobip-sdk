<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * ALPHANUMERIC_REGISTRATION
 */
final class AlphaWebhookStatusNotifApiDoc extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'status',
    ];

    /**
     * Additional requirements for this resource request, on top of the requirements returned by the requirements lookup, for example prefilled documents that need your action. Provide them in `requirements` when updating the resource request.
     */
    public \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaWebhookStatusNotifApiDoc\AdditionalRequirementsCollection $additionalRequirements;
    /**
     * Structured feedback for the resource order. Present only for UPDATE_REQUESTED, UPDATE_REQUESTED_BY_INTERNAL_REVIEWER and REJECTED statuses. Provided only when the `structuredFeedback` feature opt-in is enabled.
     */
    public \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaWebhookStatusNotifApiDoc\FeedbackCollection $feedback;
    /**
     * ID of the resource request.
     */
    public string $id;
    /**
     * A note containing extra data about the request.
     */
    public string $note;
    /**
     * Feedback for requirements. Present only for UPDATE_REQUESTED and UPDATE_REQUESTED_BY_INTERNAL_REVIEWER statuses. Deprecated only when the `structuredFeedback` feature opt-in is enabled.
     *
     * @deprecated
     */
    public \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaWebhookStatusNotifApiDoc\RequirementsFeedbackCollection $requirementsFeedback;
    /**
     * Status of the resource request.
     */
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaWebhookStatusNotifApiDoc\StatusEnum $status;
    /**
     * Type of resource.
     */
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaWebhookStatusNotifApiDoc\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'additionalRequirements' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->additionalRequirements = new \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaWebhookStatusNotifApiDoc\AdditionalRequirementsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\WebhookRequirementSpecApiDoc::class)) : parent::assignMember($name, $value),
            'feedback' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->feedback = new \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaWebhookStatusNotifApiDoc\FeedbackCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaWebhookFeedbackApiDoc::class)) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'note' => is_string($value) ? $this->note = $value : parent::assignMember($name, $value),
            'requirementsFeedback' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->requirementsFeedback = new \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaWebhookStatusNotifApiDoc\RequirementsFeedbackCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\FilledRequirementFeedbackApiDoc::class)) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaWebhookStatusNotifApiDoc\StatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaWebhookStatusNotifApiDoc\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
