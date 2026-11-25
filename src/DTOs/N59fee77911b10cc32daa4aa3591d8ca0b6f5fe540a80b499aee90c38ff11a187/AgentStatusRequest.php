<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187;

/**
 * AgentStatusRequest
 * Example: {"status":"ACTIVE"}
 */
final class AgentStatusRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'status',
];

    public \InfobipSDK\Enums\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentStatusGroup $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentStatusGroup::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
