<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * Go To
 *
 * Go-To action is used to go back to some specified action that was already executed in the scenario and continue the execution from that point.
 */
final class GoToN13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'goTo_',
];

    protected const array PROPERTY_MAP = [
    'goTo' => 'goTo_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'goTo_' => 'goTo',
];

    protected const array VALIDATION = [
    'goTo_' => [
        'format' => 'int32',
    ],
];

    /**
     * The actionId of an action to which to jump
     * Format: int32
     */
    public int $goTo_ {
        set {
            $this->assigning('goTo_', $value);
            $this->goTo_ = $value;
        }
    }
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\GoToOptions $options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'goTo' => is_int($value) ? $this->goTo_ = $value : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\GoToOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
