<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * While Do
 *
 * While-Do action executes the do field block of code as long as a specified condition is true in the while field. As with Repeat-While, comparison is done using equal (==) or not equal (! =) operators. Make sure not to provide a condition that causes an infinite loop.
 */
final class WhileDo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'do_',
        'while_',
    ];

    protected const array PROPERTY_MAP = [
        'do' => 'do_',
        'while' => 'while_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'do_' => 'do',
        'while_' => 'while',
    ];

    /**
     * Array of actions to execute if none of the conditions above are met.
     */
    public \InfobipSDK\Collections\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\WhileDo\DoCollection $do_;
    /**
     * The expression to evaluate.
     */
    public string $while_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'while' => is_string($value) ? $this->while_ = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
