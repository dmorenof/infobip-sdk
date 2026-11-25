<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * SimulatorSipEndpoint
 */
final class SimulatorSipEndpoint extends \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SimulatorCallEndpoint
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'from' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Username sent to a selected SIP trunk.
     */
    public string $from {
        set {
            $this->assigning('from', $value);
            $this->from = $value;
        }
    }
    /**
     * Custom headers.
     */
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SimulatorSipEndpoint\HeadersMap $headers;
    /**
     * Unique identifier of a SIP trunk.
     */
    public string $sipTrunkId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'sipTrunkId' => is_string($value) ? $this->sipTrunkId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
