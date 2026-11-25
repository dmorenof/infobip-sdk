<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * Callback
 *
 * Clients callback where markup language is hosted.
 */
final class Callback extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'method',
    'url',
];

    protected const array VALIDATION = [
    'url' => [
        'minLength' => 1,
    ],
];

    /**
     * URL where errors will be sent
     */
    public string $errorUrl;
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\MarkupHttpMethod $method;
    /**
     * URL where markup language is hosted
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
            'errorUrl' => is_string($value) ? $this->errorUrl = $value : parent::assignMember($name, $value),
            'method' => is_string($value) ? $this->method = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\MarkupHttpMethod::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
