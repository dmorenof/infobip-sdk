<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1;

/**
 * SendingStrategyId
 */
final class SendingStrategyId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'sendingStrategyId',
    ];

    /**
     * Id of the sending strategy.
     * Example: "78D8394AC3EG0460B4CF0E723FC31B49"
     */
    public string $sendingStrategyId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'sendingStrategyId' => is_string($value) ? $this->sendingStrategyId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
