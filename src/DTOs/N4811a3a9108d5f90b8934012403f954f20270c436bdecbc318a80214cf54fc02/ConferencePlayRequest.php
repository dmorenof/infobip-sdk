<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4811a3a9108d5f90b8934012403f954f20270c436bdecbc318a80214cf54fc02;

/**
 * ConferencePlayRequest
 */
final class ConferencePlayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
];

    protected const array VALIDATION = [
    'loopCount' => [
        'format' => 'int32',
    ],
];

    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicPlayContent $content;
    /**
     * Number of times the file will be played.
     * Format: int32
     */
    public int $loopCount {
        set {
            $this->assigning('loopCount', $value);
            $this->loopCount = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'loopCount' => is_int($value) ? $this->loopCount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
