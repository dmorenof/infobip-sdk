<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * AlphaResourceOrderFeedbackApiDoc
 *
 * List of standardized and structured feedback for the resource order. Provided only when the `structuredFeedback` feature opt-in is enabled.
 */
final class AlphaResourceOrderFeedbackApiDoc extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of validation errors for the requirement.
     */
    public \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaResourceOrderFeedbackApiDoc\ErrorsCollection $errors;
    /**
     * Key of the requirement the feedback refers to.
     */
    public string $requirementKey;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaResourceOrderFeedbackApiDoc\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\ResourceOrderFeedbackError::class)) : parent::assignMember($name, $value),
            'requirementKey' => is_string($value) ? $this->requirementKey = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
