<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde;

/**
 * RouteStatusRequest
 *
 * Route status request object.
 */
final class RouteStatusRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'routeStatus',
];

    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RouteStatus $routeStatus;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'routeStatus' => is_string($value) ? $this->routeStatus = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RouteStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
