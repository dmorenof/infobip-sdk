<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * CaptureDtmfCallbackUrl
 *
 * Callback URL configuration for captureDtmf action.
 */
final class CaptureDtmfCallbackUrl extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'url',
];

    protected const array VALIDATION = [
    'url' => [
        'minLength' => 1,
    ],
];

    /**
     * Whether to invoke the callback URL when no DTMF digits were collected.
     */
    public bool $callOnEmpty;
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\MarkupHttpMethod $method;
    /**
     * Callback URL.
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callOnEmpty' => is_bool($value) ? $this->callOnEmpty = $value : parent::assignMember($name, $value),
            'method' => is_string($value) ? $this->method = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\MarkupHttpMethod::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
