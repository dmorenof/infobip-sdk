<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec;

/**
 * PushConfigurationPageResponse
 */
final class PushConfigurationPageResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\PageInfo $pageInfo;
    /**
     * List of results for this page.
     */
    public \InfobipSDK\Collections\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationPageResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'pageInfo' => $value instanceof \stdClass ? $this->pageInfo = new \InfobipSDK\DTOs\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\PageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationPageResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\PushConfigurationResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
