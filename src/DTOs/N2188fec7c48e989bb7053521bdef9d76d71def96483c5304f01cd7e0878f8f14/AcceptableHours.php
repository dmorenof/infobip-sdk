<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * AcceptableHours
 *
 * Specify time range within a day when a link can be used. It is 00:00 - 23:59, by default. UTC timezone is used.
 */
final class AcceptableHours extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\TimeOfDay $end;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\TimeOfDay $start;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end' => $value instanceof \stdClass ? $this->end = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\TimeOfDay($value) : parent::assignMember($name, $value),
            'start' => $value instanceof \stdClass ? $this->start = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\TimeOfDay($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
