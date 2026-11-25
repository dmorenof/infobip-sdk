<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75;

/**
 * WhatsAppSenderRegistrationResponse
 */
final class WhatsAppSenderRegistrationResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'status',
];

    public \InfobipSDK\Enums\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\WhatsAppSenderRegistrationStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\WhatsAppSenderRegistrationStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
