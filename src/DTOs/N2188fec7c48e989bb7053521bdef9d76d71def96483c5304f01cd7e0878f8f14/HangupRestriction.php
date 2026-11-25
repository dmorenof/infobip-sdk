<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * HangupRestriction
 *
 * Hangup restrictions for call link.
 */
final class HangupRestriction extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'minRingingTime' => [
            'minimum' => 0,
            'format' => 'int32',
        ],
    ];

    /**
     * The caller will not be able to hang up once the call is initiated, until the number of seconds in the ringing time reaches this value. Once the callee answers the call, there will be no hangup restrictions. If this field is not set, hangup will be possible anytime.
     * Format: int32
     */
    public int $minRingingTime {
        set {
            $this->assigning('minRingingTime', $value);
            $this->minRingingTime = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'minRingingTime' => is_int($value) ? $this->minRingingTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
