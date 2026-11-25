<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * RcsTemplateProviderStatusDetails
 *
 * List of template providers in the country and their template registration status.
 */
final class RcsTemplateProviderStatusDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'providerName',
    'status',
];

    /**
     * Name of the provider.
     */
    public string $providerName;
    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsProviderTemplateApiStatus $status;
    /**
     * Timestamp when the status for this specific provider was last time updated.
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'providerName' => is_string($value) ? $this->providerName = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsProviderTemplateApiStatus::from($value) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
