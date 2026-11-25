<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Febbeec59369f28c0a6e3ddd1a2666aea9869953e0893914d340d35c6901410c;

/**
 * SubdomainRequest
 */
final class SubdomainRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'name' => [
            'pattern' => '^[A-Za-z0-9](?:[A-Za-z0-9\\-]{0,61}[A-Za-z0-9])?$',
        ],
    ];

    /**
     * Name of a subdomain.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
