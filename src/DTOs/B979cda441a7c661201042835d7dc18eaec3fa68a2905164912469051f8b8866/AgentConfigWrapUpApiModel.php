<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * AgentConfigWrapUpApiModel
 * Example: {"wrapUpSeconds":30}
 */
final class AgentConfigWrapUpApiModel extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'wrapUpSeconds' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Wrap up length in seconds specific to the agent. Null if not set, in which case account wrap up time should be used. <a href="https://www.infobip.com/docs/conversations/calls#wrap-up-window-agent-guide" target="_blank">More info</a>.
     * Format: int32
     */
    public ?int $wrapUpSeconds {
        set {
            $this->assigning('wrapUpSeconds', $value);
            $this->wrapUpSeconds = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'wrapUpSeconds' => $value === null || is_int($value) ? $this->wrapUpSeconds = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
