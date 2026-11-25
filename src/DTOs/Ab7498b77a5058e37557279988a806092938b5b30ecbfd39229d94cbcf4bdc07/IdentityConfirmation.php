<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Ab7498b77a5058e37557279988a806092938b5b30ecbfd39229d94cbcf4bdc07;

/**
 * IdentityConfirmation
 */
final class IdentityConfirmation extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'hash',
];

    protected const array VALIDATION = [
    'hash' => [
        'minLength' => 1,
    ],
];

    /**
     * Identity hash
     * Example: "eU2Fdi4EMUw="
     */
    public string $hash {
        set {
            $this->assigning('hash', $value);
            $this->hash = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'hash' => is_string($value) ? $this->hash = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
