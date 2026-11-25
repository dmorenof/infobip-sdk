<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * SmsFailoverDto
 *
 * SMS failover message contents. In case this field is null, no SMS failover will be done.
 */
final class SmsFailoverDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'from',
    'text',
];

    protected const array VALIDATION = [
    'validityPeriod' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
];

    /**
     * Message failover sender.
     * Example: "441134961234"
     */
    public string $from;
    public \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\RegionalDto $regional;
    /**
     * Message failover text.
     * Example: "One time verification pin: 1234"
     */
    public string $text;
    /**
     * The message validity period in seconds. When the period expires, it will not be allowed for the message to be sent.
     * Example: 5
     * Format: int32
     */
    public int $validityPeriod {
        set {
            $this->assigning('validityPeriod', $value);
            $this->validityPeriod = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'regional' => $value instanceof \stdClass ? $this->regional = new \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\RegionalDto($value) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'validityPeriod' => is_int($value) ? $this->validityPeriod = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
