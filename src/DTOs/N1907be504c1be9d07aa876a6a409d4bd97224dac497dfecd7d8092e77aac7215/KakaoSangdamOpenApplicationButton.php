<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215;

/**
 * KakaoSangdamOpenApplicationButton
 *
 * Button that opens a mobile application via a custom URI scheme. Falls back to a URL if the app is not installed.
 */
final class KakaoSangdamOpenApplicationButton extends \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamButton
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'fallbackUrlMobile' => [
        'minLength' => 0,
        'maxLength' => 500,
        'pattern' => '',
    ],
    'fallbackUrlPc' => [
        'minLength' => 0,
        'maxLength' => 500,
        'pattern' => '',
    ],
    'name' => [
        'minLength' => 0,
        'maxLength' => 28,
    ],
    'schemeAndroid' => [
        'minLength' => 0,
        'maxLength' => 500,
    ],
    'schemeIos' => [
        'minLength' => 0,
        'maxLength' => 500,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Fallback URL for mobile if the application is not installed.
     */
    public string $fallbackUrlMobile {
        set {
            $this->assigning('fallbackUrlMobile', $value);
            $this->fallbackUrlMobile = $value;
        }
    }
    /**
     * Fallback URL for PC if the application is not installed.
     */
    public string $fallbackUrlPc {
        set {
            $this->assigning('fallbackUrlPc', $value);
            $this->fallbackUrlPc = $value;
        }
    }
    /**
     * Button label displayed to the user.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Android URI scheme to open the application.
     */
    public string $schemeAndroid {
        set {
            $this->assigning('schemeAndroid', $value);
            $this->schemeAndroid = $value;
        }
    }
    /**
     * iOS URI scheme to open the application.
     */
    public string $schemeIos {
        set {
            $this->assigning('schemeIos', $value);
            $this->schemeIos = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fallbackUrlMobile' => is_string($value) ? $this->fallbackUrlMobile = $value : parent::assignMember($name, $value),
            'fallbackUrlPc' => is_string($value) ? $this->fallbackUrlPc = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'schemeAndroid' => is_string($value) ? $this->schemeAndroid = $value : parent::assignMember($name, $value),
            'schemeIos' => is_string($value) ? $this->schemeIos = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
