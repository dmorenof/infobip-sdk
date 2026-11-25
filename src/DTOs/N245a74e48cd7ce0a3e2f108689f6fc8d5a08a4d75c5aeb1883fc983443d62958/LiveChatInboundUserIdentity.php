<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958;

/**
 * LiveChatInboundUserIdentity
 *
 * Information about the user who sent the message.
 */
final class LiveChatInboundUserIdentity extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'identityType',
    'identityValue',
];

    protected const array VALIDATION = [
    'identityValue' => [
        'minLength' => 1,
    ],
];

    public \InfobipSDK\Enums\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatInboundUserIdentityType $identityType;
    /**
     * Unique Person identifier.
     */
    public string $identityValue {
        set {
            $this->assigning('identityValue', $value);
            $this->identityValue = $value;
        }
    }
    /**
     * Push registration ID.
     */
    public string $pushRegistrationId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'identityType' => is_string($value) ? $this->identityType = \InfobipSDK\Enums\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatInboundUserIdentityType::from($value) : parent::assignMember($name, $value),
            'identityValue' => is_string($value) ? $this->identityValue = $value : parent::assignMember($name, $value),
            'pushRegistrationId' => is_string($value) ? $this->pushRegistrationId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
