<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * UtilityPostbackParameter
 */
final class UtilityPostbackParameter extends \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\UtilityButtonParameter
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'payload' => [
        'minLength' => 0,
        'maxLength' => 4000,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Text placed in the template button's payload. Meta sends it back to the webhook when the recipient taps the button.
     * Example: "order_id_566701"
     */
    public string $payload {
        set {
            $this->assigning('payload', $value);
            $this->payload = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payload' => is_string($value) ? $this->payload = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
