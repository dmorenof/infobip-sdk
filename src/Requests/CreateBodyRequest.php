<?php

declare(strict_types=1);

namespace InfobipSDK\Requests;

final class CreateBodyRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of people.
     */
    public \InfobipSDK\Collections\C33895ecf7bbac41312b872d159ba76eaa0387a04e1ff6d8280d7b04d6e7955c\BatchCreateRequest\PeopleCollection $people;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'people' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->people = new \InfobipSDK\Collections\C33895ecf7bbac41312b872d159ba76eaa0387a04e1ff6d8280d7b04d6e7955c\BatchCreateRequest\PeopleCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\A8ed60f1ed4abc0dfe4d5460edd3205f89585f2cd4b436e4d83a1231d28c264c\IamPersonV2::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
