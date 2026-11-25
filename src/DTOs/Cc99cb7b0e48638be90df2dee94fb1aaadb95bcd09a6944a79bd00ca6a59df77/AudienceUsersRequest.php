<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77;

/**
 * AudienceUsersRequest
 */
final class AudienceUsersRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
    ];

    protected const array VALIDATION = [
        'data' => [
            'minItems' => 1,
            'maxItems' => 10000,
        ],
    ];

    /**
     * Users to match against Meta's user database. Each entry must contain a hashed phone number, a hashed email address, or both. Providing both identifiers for the same person increases the chance of a match.
     */
    public \InfobipSDK\Collections\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\AudienceUsersRequest\DataCollection $data {
        set {
            $this->assigning('data', $value);
            $this->data = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'data' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->data = new \InfobipSDK\Collections\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\AudienceUsersRequest\DataCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\AudienceUser::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
