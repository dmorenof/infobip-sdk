<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessageOrderingOptions
 *
 * Message ordering options.
 */
final class MessageOrderingOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * If set to `true`, messages will be sent in the same order as they are provided in the request.
     */
    public bool $respectOrder;
    /**
     * It can be used in combination with `respectOrder` to stop sending messages when first message from request fails.
     */
    public bool $stopOnFailure;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'respectOrder' => is_bool($value) ? $this->respectOrder = $value : parent::assignMember($name, $value),
            'stopOnFailure' => is_bool($value) ? $this->stopOnFailure = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
