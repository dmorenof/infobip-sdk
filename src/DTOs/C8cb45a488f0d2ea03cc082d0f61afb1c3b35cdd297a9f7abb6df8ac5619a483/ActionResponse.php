<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483;

/**
 * ActionResponse
 *
 * List of actions.
 */
final class ActionResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'key',
    'type',
];

    /**
     * Callback data that will be sent along with the message.
     */
    public string $callbackData;
    /**
     * URL for HTTP forward action.
     */
    public string $forwardUrl;
    /**
     * Action key.
     */
    public string $key;
    public \InfobipSDK\Enums\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\ActionType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'forwardUrl' => is_string($value) ? $this->forwardUrl = $value : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\ActionType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
