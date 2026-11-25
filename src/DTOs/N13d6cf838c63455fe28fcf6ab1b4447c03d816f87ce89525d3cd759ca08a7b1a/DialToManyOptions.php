<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * DialToManyOptions
 */
final class DialToManyOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'maxCallDuration' => [
        'minimum' => 1,
        'format' => 'int32',
    ],
];

    /**
     * If set, call transfer will be limited by `maxCallDuration` seconds; must be a positive number, no upper bound.
     * Format: int32
     */
    public int $maxCallDuration {
        set {
            $this->assigning('maxCallDuration', $value);
            $this->maxCallDuration = $value;
        }
    }
    /**
     * Flag indicating that parallel (`true`), or sequential (`false`) Dial to Many will be executed.
     */
    public bool $parallel;
    /**
     * Must be a valid [E.164](https://en.wikipedia.org/wiki/E.164) number; the parameter can be constructed using variables
     */
    public string $senderId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'maxCallDuration' => is_int($value) ? $this->maxCallDuration = $value : parent::assignMember($name, $value),
            'parallel' => is_bool($value) ? $this->parallel = $value : parent::assignMember($name, $value),
            'senderId' => is_string($value) ? $this->senderId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
