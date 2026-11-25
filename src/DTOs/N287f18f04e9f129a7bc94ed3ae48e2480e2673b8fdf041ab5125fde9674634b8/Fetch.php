<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * Fetch
 *
 * Fetch action retrieves markup instructions from a URL at runtime.
 */
final class Fetch extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'action',
        'url',
    ];

    protected const array VALIDATION = [
        'url' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Action discriminator.
     */
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Fetch\ActionEnum $action;
    /**
     * HTTP method for the fetch request (POST or GET).
     */
    public string $method;
    /**
     * URL to fetch markup instructions from.
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
            'action' => is_string($value) ? $this->action = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Fetch\ActionEnum::from($value) : parent::assignMember($name, $value),
            'method' => is_string($value) ? $this->method = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
