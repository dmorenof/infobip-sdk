<?php

declare(strict_types=1);

namespace InfobipSDK\Requests;

final class BatchBodyRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of people.
     */
    public \InfobipSDK\Collections\N6e5093188ef762ccf12b90d36e576ec662722c76b160603b886937148ee4174f\BatchTagRequest\PeopleCollection $people;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'people' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->people = new \InfobipSDK\Collections\N6e5093188ef762ccf12b90d36e576ec662722c76b160603b886937148ee4174f\BatchTagRequest\PeopleCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6e5093188ef762ccf12b90d36e576ec662722c76b160603b886937148ee4174f\BatchTagEntry::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
