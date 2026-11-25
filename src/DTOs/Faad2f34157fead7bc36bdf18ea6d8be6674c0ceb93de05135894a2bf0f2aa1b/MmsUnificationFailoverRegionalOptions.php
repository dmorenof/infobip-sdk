<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * MmsUnificationFailoverRegionalOptions
 *
 * Region-specific parameters, often imposed by local laws. Use this, if country or region that you are sending an SMS to requires additional information.
 */
final class MmsUnificationFailoverRegionalOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsUnificationSouthKoreaOptions $southKorea;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'southKorea' => $value instanceof \stdClass ? $this->southKorea = new \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsUnificationSouthKoreaOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
