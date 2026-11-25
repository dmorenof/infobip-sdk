<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * AgentConfigApiModel
 */
final class AgentConfigApiModel extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'wrapUpSeconds' => [
        'format' => 'int32',
    ],
];

    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\BackgroundBlurSettingsApiModel $backgroundBlurSettings;
    /**
     * Wrap up length in seconds specific to the agent. Null if not set, in which case account wrap up time should be used. <a href="https://www.infobip.com/docs/conversations/calls#wrap-up-window-agent-guide" target="_blank">More info</a>.
     * Format: int32
     */
    public int $wrapUpSeconds {
        set {
            $this->assigning('wrapUpSeconds', $value);
            $this->wrapUpSeconds = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'backgroundBlurSettings' => $value instanceof \stdClass ? $this->backgroundBlurSettings = new \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\BackgroundBlurSettingsApiModel($value) : parent::assignMember($name, $value),
            'wrapUpSeconds' => is_int($value) ? $this->wrapUpSeconds = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
