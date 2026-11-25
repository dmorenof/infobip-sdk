<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c;

/**
 * CredentialsBody
 */
final class CredentialsBody extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'apiId',
    'key',
];

    protected const array VALIDATION = [
    'apiId' => [
        'minLength' => 1,
        'pattern' => '[a-zA-Z0-9-]+',
    ],
    'key' => [
        'minLength' => 1,
        'pattern' => '[a-zA-Z0-9-]+',
    ],
];

    /**
     * The first part of the generate Authorization header.
     */
    public string $apiId {
        set {
            $this->assigning('apiId', $value);
            $this->apiId = $value;
        }
    }
    /**
     * Used to generate the second part of the Authorization header.
     */
    public string $key {
        set {
            $this->assigning('key', $value);
            $this->key = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiId' => is_string($value) ? $this->apiId = $value : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
