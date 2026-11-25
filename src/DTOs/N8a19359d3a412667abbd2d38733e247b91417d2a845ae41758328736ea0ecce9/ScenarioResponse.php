<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9;

/**
 * ScenarioResponse
 */
final class ScenarioResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of all enabled scenarios.
     */
    public \InfobipSDK\Collections\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\ScenarioResponse\ScenariosCollection $scenarios;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'scenarios' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->scenarios = new \InfobipSDK\Collections\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\ScenarioResponse\ScenariosCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\ScenarioDescription::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
