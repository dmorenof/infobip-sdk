<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * KakaoChinguAppLinkButton
 */
final class KakaoChinguAppLinkButton extends \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KakaoChinguButton
{
    public const array REQUIRED_FIELDS = [
        'buttonText',
    ];

    protected const array VALIDATION = [
        'androidScheme' => [
            'minLength' => 1,
            'maxLength' => 500,
        ],
        'buttonText' => [
            'minLength' => 1,
            'maxLength' => 28,
        ],
        'iosScheme' => [
            'minLength' => 1,
            'maxLength' => 500,
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'androidScheme',
        'buttonText',
        'iosScheme',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Scheme to use on Android devices.
     */
    public string $androidScheme {
        set {
            $this->assigning('androidScheme', $value);
            $this->androidScheme = $value;
        }
    }
    /**
     * Scheme to use on iOS devices.
     */
    public string $iosScheme {
        set {
            $this->assigning('iosScheme', $value);
            $this->iosScheme = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'androidScheme' => is_string($value) ? $this->androidScheme = $value : parent::assignMember($name, $value),
            'iosScheme' => is_string($value) ? $this->iosScheme = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
