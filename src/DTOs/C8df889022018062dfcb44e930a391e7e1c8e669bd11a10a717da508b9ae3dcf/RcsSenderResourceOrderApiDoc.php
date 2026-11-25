<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * RCS_SENDER_LAUNCH
 */
final class RcsSenderResourceOrderApiDoc extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Additional email addresses.
     */
    public \InfobipSDK\Collections\StringCollection $additionalContactEmails;
    /**
     * Country code in two-letter ISO standard.
     */
    public string $countryCode;
    /**
     * List of carrier names excluded from the sender launch.
     */
    public \InfobipSDK\Collections\StringCollection $excludedCarriers;
    /**
     * List of standardized and structured feedback for the resource order. Provided only when the `structuredFeedback` feature opt-in is enabled.
     */
    public \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RcsSenderResourceOrderApiDoc\FeedbackCollection $feedback;
    /**
     * The ID of the resource.
     * Format: uuid
     */
    public string $id;
    /**
     * A note containing extra data about the request.
     */
    public string $note;
    public \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\Platform $platform;
    /**
     * Email address of the requester.
     */
    public string $requestedByEmailAddress;
    /**
     * Date and time the resource was requested.
     * Format: date-time
     */
    public string $requestedDate;
    /**
     * List of requirements for the resource.
     */
    public \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaResourceOrderApiDoc\RequirementsCollection $requirements;
    /**
     * List of feedback for requirements. Deprecated only when the `structuredFeedback` feature opt-in is enabled.
     *
     * @deprecated
     */
    public \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaResourceOrderApiDoc\RequirementsFeedbackCollection $requirementsFeedback;
    /**
     * Sender name.
     */
    public string $senderName;
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\ResourceOrderStatus $status;
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\TrafficOrigin $trafficOrigin;
    /**
     * Type of resource.
     */
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RcsSenderResourceOrderApiDoc\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'additionalContactEmails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->additionalContactEmails = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'excludedCarriers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->excludedCarriers = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'feedback' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->feedback = new \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RcsSenderResourceOrderApiDoc\FeedbackCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RcsSenderResourceOrderFeedbackApiDoc::class)) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'note' => is_string($value) ? $this->note = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\Platform($value) : parent::assignMember($name, $value),
            'requestedByEmailAddress' => is_string($value) ? $this->requestedByEmailAddress = $value : parent::assignMember($name, $value),
            'requestedDate' => is_string($value) ? $this->requestedDate = $value : parent::assignMember($name, $value),
            'requirements' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->requirements = new \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaResourceOrderApiDoc\RequirementsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\FilledRequirement::class)) : parent::assignMember($name, $value),
            'requirementsFeedback' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->requirementsFeedback = new \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaResourceOrderApiDoc\RequirementsFeedbackCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\FilledRequirementFeedback::class)) : parent::assignMember($name, $value),
            'senderName' => is_string($value) ? $this->senderName = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\ResourceOrderStatus::from($value) : parent::assignMember($name, $value),
            'trafficOrigin' => is_string($value) ? $this->trafficOrigin = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\TrafficOrigin::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RcsSenderResourceOrderApiDoc\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
