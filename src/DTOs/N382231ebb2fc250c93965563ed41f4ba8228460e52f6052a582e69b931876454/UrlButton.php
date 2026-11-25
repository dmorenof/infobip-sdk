<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454;

/**
 * UrlButton
 *
 * Button that opens a URL in the user's browser when tapped.
 */
final class UrlButton extends \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\Button
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'name' => [
        'minLength' => 0,
        'maxLength' => 28,
    ],
    'target' => [
        'minLength' => 0,
        'maxLength' => 3,
    ],
    'urlMobile' => [
        'minLength' => 0,
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
     * Target window for the URL (e.g., _self, _blank).
     */
    public string $target {
        set {
            $this->assigning('target', $value);
            $this->target = $value;
        }
    }
    /**
     * URL to open on mobile devices.
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
            'target' => is_string($value) ? $this->target = $value : parent::assignMember($name, $value),
            'urlMobile' => is_string($value) ? $this->urlMobile = $value : parent::assignMember($name, $value),
            'urlPc' => is_string($value) ? $this->urlPc = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
