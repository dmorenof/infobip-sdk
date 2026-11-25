<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N40143f8c1273929a779db5eeca48aaeec6583ec5c7f80b29e546fbb75ba02e1d;

/**
 * ServiceException
 */
final class ServiceException extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Identifier of the error.
     */
    public ?string $messageId;
    /**
     * Detailed error description.
     */
    public ?string $text;
    /**
     * Validation errors.
     */
    public ?\InfobipSDK\Collections\N40143f8c1273929a779db5eeca48aaeec6583ec5c7f80b29e546fbb75ba02e1d\ServiceException\ValidationErrorsCollection $validationErrors;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageId' => $value === null || is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'text' => $value === null || is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'validationErrors' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->validationErrors = $value === null ? null : new \InfobipSDK\Collections\N40143f8c1273929a779db5eeca48aaeec6583ec5c7f80b29e546fbb75ba02e1d\ServiceException\ValidationErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N40143f8c1273929a779db5eeca48aaeec6583ec5c7f80b29e546fbb75ba02e1d\ValidationError::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
