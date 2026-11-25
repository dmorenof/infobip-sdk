<?php

declare(strict_types=1);

namespace InfobipSDK\Requests\AllOfBatchAddPersonsToCompanyBody;

final class CompanyBodyRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of people.
     */
    public \InfobipSDK\Collections\F844b0afac35672d98ce1343ef10d571c4af0fe8a10110acace5c340f3fe0877\BatchPersonsToCompanyRequest\PeopleCollection $people;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'people' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->people = new \InfobipSDK\Collections\F844b0afac35672d98ce1343ef10d571c4af0fe8a10110acace5c340f3fe0877\BatchPersonsToCompanyRequest\PeopleCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\F844b0afac35672d98ce1343ef10d571c4af0fe8a10110acace5c340f3fe0877\PersonsToCompanyEntry::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
