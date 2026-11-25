<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Ffb4c29a0ab7c4ca15544ca9d6ceffaf3e8b394d7fc1a53728ba61496b4513fc;

/**
 * FilePageResponse
 */
final class FilePageResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\PageInfo $pageInfo;
    /**
     * List of results for the requested page.
     */
    public \InfobipSDK\Collections\Ffb4c29a0ab7c4ca15544ca9d6ceffaf3e8b394d7fc1a53728ba61496b4513fc\FilePageResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'pageInfo' => $value instanceof \stdClass ? $this->pageInfo = new \InfobipSDK\DTOs\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\PageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\Ffb4c29a0ab7c4ca15544ca9d6ceffaf3e8b394d7fc1a53728ba61496b4513fc\FilePageResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Ffb4c29a0ab7c4ca15544ca9d6ceffaf3e8b394d7fc1a53728ba61496b4513fc\FileResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
