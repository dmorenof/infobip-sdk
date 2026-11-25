<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * ValidationOkResponse
 */
final class ValidationOkResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'action',
        'description',
    ];

    /**
     * An action that should be taken.
     */
    public string $action;
    /**
     * A detailed description.
     */
    public string $description;
    /**
     * List of violations that may be omitted, but is recommended to address.
     */
    public \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\ValidationBadResponse\SkippableViolationsCollection $skippableViolations;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'skippableViolations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->skippableViolations = new \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\ValidationBadResponse\SkippableViolationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Api\ErrorViolation::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
