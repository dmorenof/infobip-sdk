<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InThreadAuthenticationReply
 *
 * Structure that contains the details of the in-thread authentication reply.
 */
final class InThreadAuthenticationReply extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'status',
];

    /**
     * Business-scoped passkey hash, present only when status is verified.
     */
    public string $businessScopedPasskeyHash;
    public \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InThreadAuthenticationStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'businessScopedPasskeyHash' => is_string($value) ? $this->businessScopedPasskeyHash = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InThreadAuthenticationStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
