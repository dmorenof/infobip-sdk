<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * SipEndpoint
 */
final class SipEndpoint extends \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallEndpoint
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'sipTrunkId' => [
        'minLength' => 1,
    ],
    'username' => [
        'minLength' => 1,
    ],
];

    /**
     * Custom headers. Only headers starting with `X-Client-` prefix will be propagated.
     */
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SipEndpoint\CustomHeadersMap $customHeaders;
    /**
     * SIP trunk ID.
     */
    public string $sipTrunkId {
        set {
            $this->assigning('sipTrunkId', $value);
            $this->sipTrunkId = $value;
        }
    }
    /**
     * SIP endpoint username.
     */
    public string $username {
        set {
            $this->assigning('username', $value);
            $this->username = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'sipTrunkId' => is_string($value) ? $this->sipTrunkId = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
