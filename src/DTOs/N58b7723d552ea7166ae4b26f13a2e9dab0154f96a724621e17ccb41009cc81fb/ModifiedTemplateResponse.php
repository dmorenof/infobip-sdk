<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb;

/**
 * ModifiedTemplateResponse
 */
final class ModifiedTemplateResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Collections\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\ModifiedTemplateResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\ModifiedTemplateResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\TemplateResult::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
