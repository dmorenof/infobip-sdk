<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * AgentStatus
 *
 * Agent status details.
 */
final class AgentStatus extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
    ];

    /**
     * Status group.
     * Example: "ACTIVE"
     */
    public \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\AgentStatus\GroupEnum $group;
    /**
     * Unique status ID. UUID v4.
     * Example: "112f35ab-1cc3-4822-9aa2-22ee1f23112a"
     */
    public string $id;
    /**
     * Status name. Learn more about [agent statuses](https://www.infobip.com/docs/conversations/conversations-setup#agent-statuses).
     * Example: "Available"
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'group' => is_string($value) ? $this->group = \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\AgentStatus\GroupEnum::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
