<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveOrderDetailsOrderExpiration
 *
 * Expiration of the order.
 */
final class InteractiveOrderDetailsOrderExpiration extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'description',
        'expirationSeconds',
    ];

    protected const array VALIDATION = [
        'description' => [
            'minLength' => 0,
            'maxLength' => 120,
        ],
        'expirationSeconds' => [
            'minimum' => 360,
        ],
    ];

    /**
     * Text explanation of expiration.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Order expiration time in seconds, at least 360.
     * Format: int64
     */
    public int $expirationSeconds {
        set {
            $this->assigning('expirationSeconds', $value);
            $this->expirationSeconds = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'expirationSeconds' => is_int($value) ? $this->expirationSeconds = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
