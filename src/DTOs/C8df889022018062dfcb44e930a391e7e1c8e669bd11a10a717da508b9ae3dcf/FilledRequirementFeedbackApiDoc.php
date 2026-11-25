<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * FilledRequirementFeedbackApiDoc
 *
 * Feedback for requirements. Present only for UPDATE_REQUESTED and UPDATE_REQUESTED_BY_INTERNAL_REVIEWER statuses.
 */
final class FilledRequirementFeedbackApiDoc extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\FeedbackCode $code;
    /**
     * Feedback for the requirement.
     */
    public string $feedback;
    /**
     * Key of the requirement for which feedback is provided.
     */
    public string $key;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\FeedbackCode::from($value) : parent::assignMember($name, $value),
            'feedback' => is_string($value) ? $this->feedback = $value : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
