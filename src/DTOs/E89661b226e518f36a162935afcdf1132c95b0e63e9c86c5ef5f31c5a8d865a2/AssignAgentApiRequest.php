<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * AssignAgentApiRequest
 * Example: {"agentId":"c856e230-a8cd-498b-9996-42bbed35029a"}
 */
final class AssignAgentApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'agentId',
];

    protected const array VALIDATION = [
    'agentId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
];

    /**
     * Id of the conversation assignee.
     */
    public string $agentId {
        set {
            $this->assigning('agentId', $value);
            $this->agentId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'agentId' => is_string($value) ? $this->agentId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
