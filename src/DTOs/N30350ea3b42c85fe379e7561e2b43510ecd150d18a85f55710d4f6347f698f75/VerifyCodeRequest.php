<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75;

/**
 * VerifyCodeRequest
 */
final class VerifyCodeRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'code',
];

    protected const array VALIDATION = [
    'code' => [
        'pattern' => '\\d+',
    ],
];

    /**
     * Verification code.
     * Example: "123456"
     */
    public string $code {
        set {
            $this->assigning('code', $value);
            $this->code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
