<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * CallTimeoutApiModel
 * Example: {"inbound":30,"outbound":45}
 */
final class CallTimeoutApiModel extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'inbound' => [
            'minimum' => 3,
            'maximum' => 60,
            'format' => 'int32',
        ],
        'outbound' => [
            'minimum' => 3,
            'maximum' => 60,
            'format' => 'int32',
        ],
    ];

    /**
     * Inbound call timeout refers to the maximum duration a call rings before an agent answers it.
     * Format: int32
     */
    public int $inbound {
        set {
            $this->assigning('inbound', $value);
            $this->inbound = $value;
        }
    }
    /**
     * Outbound call timeout refers to the maximum duration a call rings before customer or external number answers it.
     * Format: int32
     */
    public int $outbound {
        set {
            $this->assigning('outbound', $value);
            $this->outbound = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'inbound' => is_int($value) ? $this->inbound = $value : parent::assignMember($name, $value),
            'outbound' => is_int($value) ? $this->outbound = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
