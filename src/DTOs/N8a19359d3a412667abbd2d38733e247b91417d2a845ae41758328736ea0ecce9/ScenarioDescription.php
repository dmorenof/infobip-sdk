<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9;

/**
 * ScenarioDescription
 *
 * Object containing scenario identifier and its description.
 */
final class ScenarioDescription extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Application type identifier.
     */
    public string $applicationType;
    /**
     * Scenario description.
     */
    public string $description;
    /**
     * Scenario identifier. This value should be used in all Create Session requests.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationType' => is_string($value) ? $this->applicationType = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
