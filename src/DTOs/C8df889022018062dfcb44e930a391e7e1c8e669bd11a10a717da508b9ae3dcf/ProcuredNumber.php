<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * ProcuredNumber
 *
 * List of numbers linked with the resource.
 */
final class ProcuredNumber extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'number',
    'status',
];

    /**
     * Number.
     */
    public string $number;
    /**
     * Unique ID of a number.
     */
    public string $numberKey;
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\NumberStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'number' => is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            'numberKey' => is_string($value) ? $this->numberKey = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\NumberStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
