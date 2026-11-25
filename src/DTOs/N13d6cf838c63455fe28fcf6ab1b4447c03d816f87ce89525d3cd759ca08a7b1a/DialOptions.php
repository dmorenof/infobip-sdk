<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * DialOptions
 */
final class DialOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'maxCallDuration' => [
            'minimum' => 1,
            'format' => 'int32',
        ],
    ];

    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\CustomRingback $customRingback;
    /**
     * If set, call transfer will be limited by maxCallDuration seconds, must be a positive number, no upper bound.
     * Format: int32
     */
    public int $maxCallDuration {
        set {
            $this->assigning('maxCallDuration', $value);
            $this->maxCallDuration = $value;
        }
    }
    /**
     * must be a valid E164 MSISDN; the parameter can be constructed using variables
     */
    public string $senderId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customRingback' => $value instanceof \stdClass ? $this->customRingback = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\CustomRingback($value) : parent::assignMember($name, $value),
            'maxCallDuration' => is_int($value) ? $this->maxCallDuration = $value : parent::assignMember($name, $value),
            'senderId' => is_string($value) ? $this->senderId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
