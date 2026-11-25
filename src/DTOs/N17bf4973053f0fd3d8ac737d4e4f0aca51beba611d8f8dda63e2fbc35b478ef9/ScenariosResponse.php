<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N17bf4973053f0fd3d8ac737d4e4f0aca51beba611d8f8dda63e2fbc35b478ef9;

/**
 * ScenariosResponse
 */
final class ScenariosResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
        'scenarios',
    ];

    /**
     * Array of OMNI scenarios
     */
    public \InfobipSDK\Collections\N17bf4973053f0fd3d8ac737d4e4f0aca51beba611d8f8dda63e2fbc35b478ef9\ScenariosResponse\ScenariosCollection $scenarios;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'scenarios' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->scenarios = new \InfobipSDK\Collections\N17bf4973053f0fd3d8ac737d4e4f0aca51beba611d8f8dda63e2fbc35b478ef9\ScenariosResponse\ScenariosCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N9ac20aaa973a4193ff0ca88a25f8778624dcef15967a470e5d05a9222eb15517\Scenario::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
