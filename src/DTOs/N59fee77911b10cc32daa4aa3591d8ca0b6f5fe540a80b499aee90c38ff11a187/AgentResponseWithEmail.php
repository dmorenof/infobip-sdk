<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187;

/**
 * AgentResponseWithEmail
 * Example: {"id":"97457D13B1FC79AF3C1A1096AE7E77AB","displayName":"Angus Young","status":"ACTIVE","availability":"BUSY","role":"SUPERVISOR","enabled":true,"createdAt":"2019-05-10T09:53:58.463+0000","updatedAt":"2019-05-10T09:53:58.463+0000","email":"angus.toung&#64;example.com"}
 */
final class AgentResponseWithEmail extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'displayName',
    ];

    protected const array VALIDATION = [
        'displayName' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
    ];

    protected const array READ_ONLY_FIELDS = [
        'createdAt',
        'id',
        'updatedAt',
    ];

    public \InfobipSDK\Enums\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentStatusGroup $availability;
    /**
     * Time stamp when agent is created.
     * Format: date-time
     */
    public string $createdAt;
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
     * Agent email address.
     */
    public string $email;
    /**
     * Agent enabled/disabled toggle.
     */
    public bool $enabled;
    /**
     * Agent ID.
     */
    public string $id;
    public \InfobipSDK\Enums\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentRole $role;
    public \InfobipSDK\Enums\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentStatusGroup $status;
    /**
     * Time stamp when agent is last updated.
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'availability' => is_string($value) ? $this->availability = \InfobipSDK\Enums\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentStatusGroup::from($value) : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'role' => is_string($value) ? $this->role = \InfobipSDK\Enums\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentRole::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentStatusGroup::from($value) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
