<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * Repeat While
 *
 * Repeat-While action is a control flow statement that repeatedly executes a block of code, as long as the boolean condition in the while field is true. Comparison is done using equal (==) or not equal (!=) operators. Make sure not to provide a condition that causes an infinite loop.
 */
final class RepeatWhile extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'repeat',
        'while_',
    ];

    protected const array PROPERTY_MAP = [
        'while' => 'while_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'while_' => 'while',
    ];

    /**
     * Array of actions to execute.
     */
    public \InfobipSDK\Collections\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\RepeatWhile\RepeatCollection $repeat;
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
