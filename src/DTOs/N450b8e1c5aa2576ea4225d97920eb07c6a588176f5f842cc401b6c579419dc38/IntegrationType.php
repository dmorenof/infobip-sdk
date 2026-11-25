<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N450b8e1c5aa2576ea4225d97920eb07c6a588176f5f842cc401b6c579419dc38;

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
    public \InfobipSDK\Enums\N450b8e1c5aa2576ea4225d97920eb07c6a588176f5f842cc401b6c579419dc38\IntegrationType\IntegrationTypeEnum $integrationType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'integrationType' => is_string($value) ? $this->integrationType = \InfobipSDK\Enums\N450b8e1c5aa2576ea4225d97920eb07c6a588176f5f842cc401b6c579419dc38\IntegrationType\IntegrationTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
