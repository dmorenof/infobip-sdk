<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * AuthenticationFooterApiData
 *
 * Template footer.
 */
final class AuthenticationFooterApiData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'codeExpirationMinutes' => [
            'minimum' => 1,
            'maximum' => 90,
            'format' => 'int32',
        ],
    ];

    /**
     * Indicates number of minutes the password or code is valid. If omitted, the code expiration warning will not be displayed in the delivered message.
     * Format: int32
     */
    public int $codeExpirationMinutes {
        set {
            $this->assigning('codeExpirationMinutes', $value);
            $this->codeExpirationMinutes = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'codeExpirationMinutes' => is_int($value) ? $this->codeExpirationMinutes = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
