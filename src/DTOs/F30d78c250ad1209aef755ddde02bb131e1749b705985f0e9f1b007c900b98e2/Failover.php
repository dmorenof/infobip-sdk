<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * Failover
 *
 * SMS message to be sent if the WhatsApp template message could not be delivered.
 */
final class Failover extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'from',
        'text',
    ];

    protected const array VALIDATION = [
        'from' => [
            'minLength' => 1,
            'maxLength' => 24,
        ],
        'text' => [
            'minLength' => 1,
            'maxLength' => 4096,
        ],
    ];

    /**
     * SMS sender number. Must be in international format.
     */
    public string $from {
        set {
            $this->assigning('from', $value);
            $this->from = $value;
        }
    }
    /**
     * Content of the SMS that will be sent.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
