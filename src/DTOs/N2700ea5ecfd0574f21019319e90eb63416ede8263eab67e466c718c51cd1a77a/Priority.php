<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * Priority
 */
final class Priority extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'dailySubmitLimit' => [
            'format' => 'int32',
        ],
    ];

    /**
     * The limit on how many campaigns you can submit a day with this priority.
     * Format: int32
     */
    public int $dailySubmitLimit {
        set {
            $this->assigning('dailySubmitLimit', $value);
            $this->dailySubmitLimit = $value;
        }
    }
    /**
     * The ID for the campaign priority.
     * Format: uuid
     */
    public string $priorityId;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\PriorityType $priorityType;
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\PriorityTimeData $reviewTime;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dailySubmitLimit' => is_int($value) ? $this->dailySubmitLimit = $value : parent::assignMember($name, $value),
            'priorityId' => is_string($value) ? $this->priorityId = $value : parent::assignMember($name, $value),
            'priorityType' => is_string($value) ? $this->priorityType = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\PriorityType::from($value) : parent::assignMember($name, $value),
            'reviewTime' => $value instanceof \stdClass ? $this->reviewTime = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\PriorityTimeData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
