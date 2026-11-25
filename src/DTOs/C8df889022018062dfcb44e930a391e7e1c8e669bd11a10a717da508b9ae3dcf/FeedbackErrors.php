<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * FeedbackErrors
 */
final class FeedbackErrors extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of available feedback errors.
     */
    public \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\FeedbackErrors\ErrorsCollection $errors;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\FeedbackErrors\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\FeedbackError::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
