<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * For Each
 *
 * For-each action is a control statement that executes a block of code for each of the values within the supplied list. The Supplied list of values can be static or dynamic (defined as user variable).
 */
final class ForEachN13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'do_',
    'forEach_',
    'in',
];

    protected const array PROPERTY_MAP = [
    'do' => 'do_',
    'for-each' => 'forEach_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'do_' => 'do',
    'forEach_' => 'for-each',
];

    /**
     * Delimiter for separating values in the list of values.
     */
    public string $delimiter;
    /**
     * Array of actions to execute.
     */
    public \InfobipSDK\Collections\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\ForEachN13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\DoCollection $do_;
    /**
     * Variable name that will be used inside the loop to represent single value from supplied list of values.
     */
    public string $forEach_;
    /**
     * List of values that will be iterated over. Must be delimited with specified `delimiter`.
     */
    public string $in;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'delimiter' => is_string($value) ? $this->delimiter = $value : parent::assignMember($name, $value),
            'for-each' => is_string($value) ? $this->forEach_ = $value : parent::assignMember($name, $value),
            'in' => is_string($value) ? $this->in = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
