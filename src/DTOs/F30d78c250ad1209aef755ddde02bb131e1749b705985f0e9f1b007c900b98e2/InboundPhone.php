<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InboundPhone
 *
 * Array of phones information.
 */
final class InboundPhone extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Contact's phone number.
     */
    public string $phone;
    /**
     * Type of the phone number. Can be `CELL`, `MAIN`, `IPHONE`, `HOME` or `WORK`.
     */
    public \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InboundPhone\TypeEnum $type;
    /**
     * Contact's WhatsApp ID.
     */
    public string $waId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InboundPhone\TypeEnum::from($value) : parent::assignMember($name, $value),
            'waId' => is_string($value) ? $this->waId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
