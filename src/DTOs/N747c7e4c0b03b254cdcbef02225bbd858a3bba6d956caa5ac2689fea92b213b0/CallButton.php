<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * CallButton
 */
final class CallButton extends \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\Button
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'payload' => [
        'minLength' => 1,
    ],
    'title' => [
        'minLength' => 0,
        'maxLength' => 20,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $payload {
        set {
            $this->assigning('payload', $value);
            $this->payload = $value;
        }
    }
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payload' => is_string($value) ? $this->payload = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
