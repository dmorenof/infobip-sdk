<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3;

/**
 * RegionalOptions
 */
final class RegionalOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Distributed Ledger Technology (DLT) specific parameters required for sending SMS to phone numbers registered in India.
     */
    public \InfobipSDK\DTOs\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3\IndiaDltOptions $indiaDlt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'indiaDlt' => $value instanceof \stdClass ? $this->indiaDlt = new \InfobipSDK\DTOs\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3\IndiaDltOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
