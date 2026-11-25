<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * KakaoAlimAppLinkButton
 */
final class KakaoAlimAppLinkButton extends \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KakaoAlimButton
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
    'buttonUrlMobile' => [
        'minLength' => 1,
        'maxLength' => 500,
    ],
    'buttonUrlPc' => [
        'minLength' => 1,
        'maxLength' => 500,
    ],
    'iosScheme' => [
        'minLength' => 1,
        'maxLength' => 500,
    ],
];

    protected const array WRITE_ONLY_FIELDS = [
    'androidScheme',
    'buttonText',
    'buttonUrlMobile',
    'buttonUrlPc',
    'iosScheme',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Scheme to use on Android devices. At least two parameters among schemeIos, schemeAndroid, and urlMobile must be set. Max 500 characters.
     */
    public string $androidScheme {
        set {
            $this->assigning('androidScheme', $value);
            $this->androidScheme = $value;
        }
    }
    /**
     * URL for mobile devices to open upon button press. At least two parameters among schemeIos, schemeAndroid, and urlMobile must be set. Max 500 characters.
     */
    public string $buttonUrlMobile {
        set {
            $this->assigning('buttonUrlMobile', $value);
            $this->buttonUrlMobile = $value;
        }
    }
    /**
     * URL for PCs to open upon button press. Max 500 characters.
     */
    public string $buttonUrlPc {
        set {
            $this->assigning('buttonUrlPc', $value);
            $this->buttonUrlPc = $value;
        }
    }
    /**
     * Scheme to use on iOS devices. At least two parameters among schemeIos, schemeAndroid, and urlMobile must be set. Max 500 characters.
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
            'buttonUrlMobile' => is_string($value) ? $this->buttonUrlMobile = $value : parent::assignMember($name, $value),
            'buttonUrlPc' => is_string($value) ? $this->buttonUrlPc = $value : parent::assignMember($name, $value),
            'iosScheme' => is_string($value) ? $this->iosScheme = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
