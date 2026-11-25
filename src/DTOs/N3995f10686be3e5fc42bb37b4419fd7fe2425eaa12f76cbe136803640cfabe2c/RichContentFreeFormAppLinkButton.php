<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * RichContentFreeFormAppLinkButton
 *
 * 2 of schemeAndroid, schemeIos, urlMobile are required.
 */
final class RichContentFreeFormAppLinkButton extends \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\RichContentFreeFormButton
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'name' => [
        'minLength' => 1,
        'maxLength' => 8,
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
     * Button name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Custom scheme for users operating in an Android environment.
     */
    public string $schemeAndroid {
        set {
            $this->assigning('schemeAndroid', $value);
            $this->schemeAndroid = $value;
        }
    }
    /**
     * Custom scheme for users operating in an iOS environment.
     */
    public string $schemeIos {
        set {
            $this->assigning('schemeIos', $value);
            $this->schemeIos = $value;
        }
    }
    /**
     * URL to redirect when a user is in a mobile environment. Must be a valid URL starting with `https://` or `http://`.
     */
    public string $urlMobile {
        set {
            $this->assigning('urlMobile', $value);
            $this->urlMobile = $value;
        }
    }
    /**
     * URL to redirect when a user is in a PC environment. Must be a valid URL starting with `https://` or `http://`.
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
