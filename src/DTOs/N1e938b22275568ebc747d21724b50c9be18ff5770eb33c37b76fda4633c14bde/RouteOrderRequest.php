<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde;

/**
 * RouteOrderRequest
 *
 * Route request object.
 */
final class RouteOrderRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'order',
];

    protected const array VALIDATION = [
    'order' => [
        'minimum' => 1,
        'format' => 'int32',
    ],
];

    /**
     * Route order.
     * Format: int32
     */
    public int $order {
        set {
            $this->assigning('order', $value);
            $this->order = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'order' => is_int($value) ? $this->order = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
