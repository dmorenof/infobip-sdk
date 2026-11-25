<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * If Then Else
 *
 * If-Then-Else action provides simple branching based on a condition. If the condition evaluates to true, the then block is executed, otherwise the else block is executed. Only one of the blocks is required to be non-empty.
 */
final class IfThenElse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'if_',
    ];

    protected const array PROPERTY_MAP = [
        'else' => 'else_',
        'if' => 'if_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'else_' => 'else',
        'if_' => 'if',
    ];

    protected const array VALIDATION = [
        'actionId' => [
            'format' => 'int32',
        ],
    ];

    /**
     * User-defined ID of an action that can be used with go-to action.
     * Format: int32
     */
    public int $actionId {
        set {
            $this->assigning('actionId', $value);
            $this->actionId = $value;
        }
    }
    /**
     * The actions to execute if condition is evaluated to false.
     */
    public \InfobipSDK\Collections\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\IfThenElse\ElseCollection $else_;
    /**
     * The expression to evaluate
     */
    public string $if_;
    /**
     * The actions to execute if condition is evaluated to true.
     */
    public \InfobipSDK\Collections\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\IfThenElse\ThenCollection $then;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionId' => is_int($value) ? $this->actionId = $value : parent::assignMember($name, $value),
            'if' => is_string($value) ? $this->if_ = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
