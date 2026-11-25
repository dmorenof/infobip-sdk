<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * KakaoAlimUrlButton
 */
final class KakaoAlimUrlButton extends \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KakaoAlimButton
{
    public const array REQUIRED_FIELDS = [
    'buttonText',
];

    protected const array VALIDATION = [
    'buttonText' => [
        'minLength' => 1,
        'maxLength' => 28,
    ],
    'buttonUrl' => [
        'minLength' => 1,
        'maxLength' => 500,
    ],
    'buttonUrlMobile' => [
        'minLength' => 1,
        'maxLength' => 500,
    ],
    'buttonUrlPc' => [
        'minLength' => 1,
        'maxLength' => 500,
    ],
    'target' => [
        'pattern' => '^out$',
    ],
];

    protected const array WRITE_ONLY_FIELDS = [
    'buttonText',
    'buttonUrl',
    'buttonUrlMobile',
    'buttonUrlPc',
    'target',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * URL to open upon button press. Max 500 characters. This field is deprecated and will be removed in the future, buttonUrlMobile and buttonUrlPc should be used instead to set URL for each destination device.
     *
     * @deprecated
     */
    public string $buttonUrl {
        set {
            $this->assigning('buttonUrl', $value);
            $this->buttonUrl = $value;
        }
    }
    /**
     * URL for mobile devices to open upon button press. This field is mandatory if buttonUrl is not set, can't be used together with buttonUrl. It replaces deprecated buttonUrl field. Max 500 characters.
     */
    public string $buttonUrlMobile {
        set {
            $this->assigning('buttonUrlMobile', $value);
            $this->buttonUrlMobile = $value;
        }
    }
    /**
     * URL for PCs to open upon button press. It replaces deprecated buttonUrl field. Max 500 characters.
     */
    public string $buttonUrlPc {
        set {
            $this->assigning('buttonUrlPc', $value);
            $this->buttonUrlPc = $value;
        }
    }
    /**
     * Launches web page in external browser when set to "out"
     */
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KakaoAlimUrlButton\TargetEnum $target {
        set {
            $this->assigning('target', $value);
            $this->target = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'buttonUrl' => is_string($value) ? $this->buttonUrl = $value : parent::assignMember($name, $value),
            'buttonUrlMobile' => is_string($value) ? $this->buttonUrlMobile = $value : parent::assignMember($name, $value),
            'buttonUrlPc' => is_string($value) ? $this->buttonUrlPc = $value : parent::assignMember($name, $value),
            'target' => is_string($value) ? $this->target = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KakaoAlimUrlButton\TargetEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
