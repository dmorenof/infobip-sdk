<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8;

/**
 * PushUserPersonalizationRequest
 */
final class PushUserPersonalizationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'identity',
    ];

    /**
     * Data specified in this object will be applied to the target person upon personalization
     */
    public \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushUserPersonalizationRequest\AttributesDTO $attributes;
    public \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushUserIdentity $identity;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'identity' => $value instanceof \stdClass ? $this->identity = new \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushUserIdentity($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
