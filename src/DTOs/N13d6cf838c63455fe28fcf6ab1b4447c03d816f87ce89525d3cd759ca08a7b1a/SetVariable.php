<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * Set Variable
 *
 * Set variable action makes it possible to set a variable defined inside the IVR scenario to a specified value.
 */
final class SetVariable extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'setVariable',
    'value',
];

    /**
     * Name of a variable.
     */
    public string $setVariable;
    /**
     * Value to which the variable should be set. The parameter can be constructed using variables.
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'setVariable' => is_string($value) ? $this->setVariable = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
