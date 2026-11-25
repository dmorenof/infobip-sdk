<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * TransferToAgentRequest
 * Example: {"agentId":"3791078D92DF1FA5DE5F703345153GA2"}
 */
final class TransferToAgentRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Id of the agent to whom a call should be transferred.
     * Example: "3791078D92DF1FA5DE5F703345153GA2"
     */
    public string $agentId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'agentId' => is_string($value) ? $this->agentId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
