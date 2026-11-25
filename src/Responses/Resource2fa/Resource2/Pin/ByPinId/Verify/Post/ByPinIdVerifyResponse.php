<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Resource2fa\Resource2\Pin\ByPinId\Verify\Post;

final class ByPinIdVerifyResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'attemptsRemaining' => [
        'format' => 'int32',
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'attemptsRemaining',
    'msisdn',
    'pinError',
    'pinId',
    'verified',
];

    /**
     * Number of remaining PIN attempts.
     * Format: int32
     */
    public int $attemptsRemaining {
        set {
            $this->assigning('attemptsRemaining', $value);
            $this->attemptsRemaining = $value;
        }
    }
    /**
     * Phone number (`MSISDN`) to which the 2FA message was sent.
     */
    public string $msisdn;
    /**
     * Indicates whether an error has occurred during PIN verification.
     */
    public \InfobipSDK\Enums\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3\PinError $pinError;
    /**
     * Sent PIN code ID.
     */
    public string $pinId;
    /**
     * Indicates whether the phone number (`MSISDN`) was successfully verified.
     */
    public bool $verified;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attemptsRemaining' => is_int($value) ? $this->attemptsRemaining = $value : parent::assignMember($name, $value),
            'msisdn' => is_string($value) ? $this->msisdn = $value : parent::assignMember($name, $value),
            'pinError' => is_string($value) ? $this->pinError = \InfobipSDK\Enums\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3\PinError::from($value) : parent::assignMember($name, $value),
            'pinId' => is_string($value) ? $this->pinId = $value : parent::assignMember($name, $value),
            'verified' => is_bool($value) ? $this->verified = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
