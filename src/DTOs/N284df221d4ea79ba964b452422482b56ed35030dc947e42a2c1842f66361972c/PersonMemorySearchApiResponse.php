<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c;

/**
 * PersonMemorySearchApiResponse
 *
 * Ranked result of a search over a person's interaction memories.
 */
final class PersonMemorySearchApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'currentFacts',
    'expandedSearch',
    'results',
];

    /**
     * Latest value of each fact across the returned memories (one entry per fact name, most recent value wins).
     */
    public \InfobipSDK\Collections\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\InteractionMemoryApiResponse\FactsCollection $currentFacts;
    /**
     * `true` if the requested time window contained no matches and was widened to find results. Always `false` when no time window was requested.
     * Example: false
     */
    public bool $expandedSearch;
    /**
     * Matching interaction memories, best match first. Not paginated: at most `maxResults` entries. Empty when nothing relevant was found or the person has no memories.
     */
    public \InfobipSDK\Collections\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\PersonMemorySearchApiResponse\ResultsCollection $results;
    public \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\TimeRangeApiResponse $searchedTimeRange;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currentFacts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->currentFacts = new \InfobipSDK\Collections\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\InteractionMemoryApiResponse\FactsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\InteractionFactApiResponse::class)) : parent::assignMember($name, $value),
            'expandedSearch' => is_bool($value) ? $this->expandedSearch = $value : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\PersonMemorySearchApiResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\ScoredInteractionMemoryApiResponse::class)) : parent::assignMember($name, $value),
            'searchedTimeRange' => $value instanceof \stdClass ? $this->searchedTimeRange = new \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\TimeRangeApiResponse($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
