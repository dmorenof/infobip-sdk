<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * EmailIps
 *
 * IP options per message.
 */
final class EmailIps extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of the IP pool that will be used to send the email.
     */
    public string $ipPoolId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ipPoolId' => is_string($value) ? $this->ipPoolId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
