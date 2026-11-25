<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * TextAndImageFreeFormUrlButton
 */
final class TextAndImageFreeFormUrlButton extends \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\TextAndImageFreeFormButton
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'name' => [
        'minLength' => 1,
        'maxLength' => 14,
    ],
    'urlMobile' => [
        'minLength' => 1,
        'maxLength' => 500,
        'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
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
    public \InfobipSDK\Enums\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\TextAndImageFreeFormButtonTarget $target;
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
            'target' => is_string($value) ? $this->target = \InfobipSDK\Enums\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\TextAndImageFreeFormButtonTarget::from($value) : parent::assignMember($name, $value),
            'urlMobile' => is_string($value) ? $this->urlMobile = $value : parent::assignMember($name, $value),
            'urlPc' => is_string($value) ? $this->urlPc = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
