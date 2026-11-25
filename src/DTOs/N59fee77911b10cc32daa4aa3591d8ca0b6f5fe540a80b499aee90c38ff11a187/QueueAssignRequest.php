<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187;

/**
 * QueueAssignRequest
 * Example: {"queueId":"1111222233334444AAAA8888FFFF6666"}
 */
final class QueueAssignRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'queueId',
    ];

    protected const array VALIDATION = [
        'queueId' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
    ];

    /**
     * queueId identifier
     */
    public string $queueId {
        set {
            $this->assigning('queueId', $value);
            $this->queueId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'queueId' => is_string($value) ? $this->queueId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
