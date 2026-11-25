<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * AsyncMachineDetectionMode
 */
final class AsyncMachineDetectionMode extends \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\MachineDetectionMode
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'asyncUrl' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Callback URL for ASYNC mode
     */
    public string $asyncUrl {
        set {
            $this->assigning('asyncUrl', $value);
            $this->asyncUrl = $value;
        }
    }
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\MarkupHttpMethod $asyncUrlMethod;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'asyncUrl' => is_string($value) ? $this->asyncUrl = $value : parent::assignMember($name, $value),
            'asyncUrlMethod' => is_string($value) ? $this->asyncUrlMethod = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\MarkupHttpMethod::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
