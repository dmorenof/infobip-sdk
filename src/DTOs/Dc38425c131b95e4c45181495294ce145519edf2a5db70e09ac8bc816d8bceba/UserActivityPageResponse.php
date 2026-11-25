<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Dc38425c131b95e4c45181495294ce145519edf2a5db70e09ac8bc816d8bceba;

/**
 * UserActivityPageResponse
 */
final class UserActivityPageResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Identity associated with the requested activities.
     */
    public string $identity;
    public \InfobipSDK\DTOs\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\PageInfo $pageInfo;
    /**
     * List of results for the requested page.
     */
    public \InfobipSDK\Collections\Dc38425c131b95e4c45181495294ce145519edf2a5db70e09ac8bc816d8bceba\UserActivityPageResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'identity' => is_string($value) ? $this->identity = $value : parent::assignMember($name, $value),
            'pageInfo' => $value instanceof \stdClass ? $this->pageInfo = new \InfobipSDK\DTOs\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\PageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\Dc38425c131b95e4c45181495294ce145519edf2a5db70e09ac8bc816d8bceba\UserActivityPageResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Dc38425c131b95e4c45181495294ce145519edf2a5db70e09ac8bc816d8bceba\UserActivityResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
