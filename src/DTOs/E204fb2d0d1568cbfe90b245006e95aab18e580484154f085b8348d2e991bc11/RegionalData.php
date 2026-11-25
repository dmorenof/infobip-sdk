<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * RegionalData
 *
 * Region specific parameters, often specified by local laws. Use this if country or region that you are sending SMS to requires some extra parameters.
 */
final class RegionalData extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\IndiaDltOptions $indiaDlt;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KoreaOptions $korea;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'indiaDlt' => $value instanceof \stdClass ? $this->indiaDlt = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\IndiaDltOptions($value) : parent::assignMember($name, $value),
            'korea' => $value instanceof \stdClass ? $this->korea = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KoreaOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
