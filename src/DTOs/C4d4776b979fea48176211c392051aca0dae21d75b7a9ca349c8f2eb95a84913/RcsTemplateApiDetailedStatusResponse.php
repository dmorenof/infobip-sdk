<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * RcsTemplateApiDetailedStatusResponse
 */
final class RcsTemplateApiDetailedStatusResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'coverage',
    'name',
    'status',
];

    /**
     * Coverage information by country showing template status for each provider.
     */
    public \InfobipSDK\Collections\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateApiDetailedStatusResponse\CoverageCollection $coverage;
    /**
     * The unique name of the template.
     */
    public string $name;
    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateApiStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'coverage' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->coverage = new \InfobipSDK\Collections\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateApiDetailedStatusResponse\CoverageCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateApiCountryCoverage::class)) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateApiStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
