<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * Switch Case
 *
 * Switch-Case action takes a saved variable (obtained via either a Collect, Call API action or scenario parameters) and performs flow control based on it. It works similarly to the switch case block, using case-sensitive comparison.
 */
final class SwitchCase extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'case_',
    'switch_',
];

    protected const array PROPERTY_MAP = [
    'case' => 'case_',
    'switch' => 'switch_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'case_' => 'case',
    'switch_' => 'switch',
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
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\CaseObject $case_;
    /**
     * Name of the variable whose value to inspect.
     */
    public string $switch_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionId' => is_int($value) ? $this->actionId = $value : parent::assignMember($name, $value),
            'case' => $value instanceof \stdClass ? $this->case_ = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\CaseObject($value) : parent::assignMember($name, $value),
            'switch' => is_string($value) ? $this->switch_ = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
