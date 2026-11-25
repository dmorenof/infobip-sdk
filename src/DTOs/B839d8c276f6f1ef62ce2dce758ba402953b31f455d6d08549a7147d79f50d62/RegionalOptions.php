<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * RegionalOptions
 *
 * Region-specific parameters, often imposed by local laws. Use this, if country or region that you are sending an SMS to requires additional information.
 */
final class RegionalOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\IndiaDltOptions $indiaDlt;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\SouthKoreaOptions $southKorea;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\TurkeyIysOptions $turkeyIys;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'indiaDlt' => $value instanceof \stdClass ? $this->indiaDlt = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\IndiaDltOptions($value) : parent::assignMember($name, $value),
            'southKorea' => $value instanceof \stdClass ? $this->southKorea = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\SouthKoreaOptions($value) : parent::assignMember($name, $value),
            'turkeyIys' => $value instanceof \stdClass ? $this->turkeyIys = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\TurkeyIysOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
