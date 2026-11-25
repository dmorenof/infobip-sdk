<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6;

/**
 * FreeMessagesResponse
 */
final class FreeMessagesResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'remainingCount' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $remainingCount {
        set {
            $this->assigning('remainingCount', $value);
            $this->remainingCount = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'remainingCount' => is_int($value) ? $this->remainingCount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
