<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454;

/**
 * AppLinkButton
 *
 * Button that opens a mobile application via a custom URI scheme. Falls back to a URL if the app is not installed.
 */
final class AppLinkButton extends \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\Button
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'name' => [
        'minLength' => 0,
        'maxLength' => 28,
    ],
    'schemeAndroid' => [
        'minLength' => 1,
        'maxLength' => 500,
    ],
    'schemeIos' => [
        'minLength' => 1,
        'maxLength' => 500,
    ],
    'urlMobile' => [
        'minLength' => 1,
        'maxLength' => 500,
    ],
    'urlPc' => [
        'minLength' => 1,
        'maxLength' => 500,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

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
     * At least two of schemeAndroid, schemeIos, and urlMobile must be provided.
     */
    public string $schemeAndroid {
        set {
            $this->assigning('schemeAndroid', $value);
            $this->schemeAndroid = $value;
        }
    }
    /**
     * At least two of schemeAndroid, schemeIos, and urlMobile must be provided.
     */
    public string $schemeIos {
        set {
            $this->assigning('schemeIos', $value);
            $this->schemeIos = $value;
        }
    }
    /**
     * At least two of schemeAndroid, schemeIos, and urlMobile must be provided.
     */
    public string $urlMobile {
        set {
            $this->assigning('urlMobile', $value);
            $this->urlMobile = $value;
        }
    }
    /**
     * URL to open on PC.
     */
    public string $urlPc {
        set {
            $this->assigning('urlPc', $value);
            $this->urlPc = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'schemeAndroid' => is_string($value) ? $this->schemeAndroid = $value : parent::assignMember($name, $value),
            'schemeIos' => is_string($value) ? $this->schemeIos = $value : parent::assignMember($name, $value),
            'urlMobile' => is_string($value) ? $this->urlMobile = $value : parent::assignMember($name, $value),
            'urlPc' => is_string($value) ? $this->urlPc = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
