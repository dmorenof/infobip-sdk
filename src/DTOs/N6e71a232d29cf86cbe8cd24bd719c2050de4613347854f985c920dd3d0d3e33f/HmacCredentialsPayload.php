<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * HmacCredentials
 *
 * HMAC credentials.
 */
final class HmacCredentialsPayload extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'algorithm',
        'secretKey',
    ];

    protected const array VALIDATION = [
        'secretKey' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
    ];

    public \InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\HmacAlgorithm $algorithm;
    /**
     * Secret key.
     */
    public string $secretKey {
        set {
            $this->assigning('secretKey', $value);
            $this->secretKey = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'algorithm' => is_string($value) ? $this->algorithm = \InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\HmacAlgorithm::from($value) : parent::assignMember($name, $value),
            'secretKey' => is_string($value) ? $this->secretKey = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
