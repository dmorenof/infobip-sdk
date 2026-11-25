<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * RCS_SENDER_LAUNCH
 */
final class RcsRequirementSpecsRequestApiDoc extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'countryCode',
    'trafficOrigin',
    'type',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Country code in two-letter ISO standard.
     */
    public string $countryCode;
    /**
     * List of carrier names excluded from the sender launch.
     */
    public \InfobipSDK\Collections\StringCollection $excludedCarriers;
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\TrafficOrigin $trafficOrigin;
    /**
     * Type of resource.
     */
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RcsRequirementSpecsRequestApiDoc\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'excludedCarriers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->excludedCarriers = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'trafficOrigin' => is_string($value) ? $this->trafficOrigin = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\TrafficOrigin::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RcsRequirementSpecsRequestApiDoc\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
