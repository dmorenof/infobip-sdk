<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * EditPlatformParametersApiRequest
 */
final class EditPlatformParametersApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'platform',
];

    public \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\PlatformParameters $platform;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\PlatformParameters($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
