<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187;

/**
 * AgentRequest
 * Example: {"displayName":"Angus Young","status":"ACTIVE","role":"SUPERVISOR","enabled":true}
 */
final class AgentRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'displayName' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
    ];

    /**
     * Agent name to be displayed.
     */
    public string $displayName {
        set {
            $this->assigning('displayName', $value);
            $this->displayName = $value;
        }
    }
    /**
     * Agent enabled/disabled toggle.
     */
    public bool $enabled;
    public \InfobipSDK\Enums\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentRole $role;
    public \InfobipSDK\Enums\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentStatusGroup $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'role' => is_string($value) ? $this->role = \InfobipSDK\Enums\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentRole::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentStatusGroup::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
