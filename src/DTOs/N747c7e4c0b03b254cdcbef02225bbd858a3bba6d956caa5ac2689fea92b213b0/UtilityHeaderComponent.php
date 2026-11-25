<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * UtilityHeaderComponent
 *
 * Template header. Set it only if the header of the template has placeholders. An image header needs no value here, the image belongs to the template.
 */
final class UtilityHeaderComponent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'parameters',
];

    /**
     * Values for the placeholders in the template header. Each value names the placeholder it fills. May be empty when the header has no placeholders.
     */
    public \InfobipSDK\Collections\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\UtilityBodyComponent\ParametersCollection $parameters;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'parameters' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->parameters = new \InfobipSDK\Collections\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\UtilityBodyComponent\ParametersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\UtilityTextParameter::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
