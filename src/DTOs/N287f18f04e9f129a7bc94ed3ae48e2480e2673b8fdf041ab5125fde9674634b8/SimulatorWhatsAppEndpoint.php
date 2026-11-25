<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * SimulatorWhatsAppEndpoint
 */
final class SimulatorWhatsAppEndpoint extends \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SimulatorCallEndpoint
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
     * WhatsApp custom data.
     */
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SimulatorWhatsAppEndpoint\CustomDataMap $customData;
    /**
     * Phone number in the [E.164](https://en.wikipedia.org/wiki/E.164) format.
     */
    public string $from {
        set {
            $this->assigning('from', $value);
            $this->from = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
