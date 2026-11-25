<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N32babbebe659b3766e613639af834c2c8d0ef32612ea561cefb60f69be9f25b9;

/**
 * IntegrationType
 */
final class IntegrationType extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'integrationType',
];

    /**
     * Integration type.
     */
    public \InfobipSDK\Enums\N32babbebe659b3766e613639af834c2c8d0ef32612ea561cefb60f69be9f25b9\IntegrationType\IntegrationTypeEnum $integrationType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'integrationType' => is_string($value) ? $this->integrationType = \InfobipSDK\Enums\N32babbebe659b3766e613639af834c2c8d0ef32612ea561cefb60f69be9f25b9\IntegrationType\IntegrationTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
