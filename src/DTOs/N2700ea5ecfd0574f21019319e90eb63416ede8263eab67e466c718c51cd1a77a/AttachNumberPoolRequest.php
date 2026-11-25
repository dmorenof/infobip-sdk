<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * AttachNumberPoolRequest
 */
final class AttachNumberPoolRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'numberPoolId' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
        'reason' => [
            'minLength' => 1,
            'maxLength' => 1000,
        ],
    ];

    /**
     * Unique identifier of the number pool to be used for this campaign. If not provided, a default number pool will be automatically assigned.
     */
    public string $numberPoolId {
        set {
            $this->assigning('numberPoolId', $value);
            $this->numberPoolId = $value;
        }
    }
    /**
     * A concise explanation of why this campaign requires a dedicated number pool. Include operational or regulatory justifications, such as high-volume messaging, the use of multiple sender identities, or throughput guarantees.
     */
    public string $reason {
        set {
            $this->assigning('reason', $value);
            $this->reason = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'numberPoolId' => is_string($value) ? $this->numberPoolId = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
