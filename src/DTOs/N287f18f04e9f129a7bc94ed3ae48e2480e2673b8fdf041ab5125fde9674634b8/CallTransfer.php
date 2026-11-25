<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * CallTransfer
 *
 * Call transfers object enables transferring the ongoing call to another recipient(s) and establish a communication between your original recipient and additional one.
 */
final class CallTransfer extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'if_',
    'transferTo',
];

    protected const array PROPERTY_MAP = [
    'if' => 'if_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'if_' => 'if',
];

    protected const array VALIDATION = [
    'callTransferMaxDuration' => [
        'format' => 'int32',
    ],
];

    /**
     * Maximum duration of the transferred call, specified in seconds.
     * Format: int32
     */
    public int $callTransferMaxDuration {
        set {
            $this->assigning('callTransferMaxDuration', $value);
            $this->callTransferMaxDuration = $value;
        }
    }
    /**
     * Criteria for establishing call transfer, if `dtmf` is evaluated.
     */
    public string $equals;
    /**
     * Specifies what to evaluate. Can be `dtmf` or `anyDtmf`.
     */
    public string $if_;
    /**
     * Phone number of the recipient that will receive transferred call. Must be written in E.164 standard (Example: 41793026727).
     */
    public string $transferTo;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callTransferMaxDuration' => is_int($value) ? $this->callTransferMaxDuration = $value : parent::assignMember($name, $value),
            'equals' => is_string($value) ? $this->equals = $value : parent::assignMember($name, $value),
            'if' => is_string($value) ? $this->if_ = $value : parent::assignMember($name, $value),
            'transferTo' => is_string($value) ? $this->transferTo = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
