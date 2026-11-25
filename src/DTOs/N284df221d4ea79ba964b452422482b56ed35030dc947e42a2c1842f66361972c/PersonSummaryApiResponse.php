<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c;

/**
 * PersonSummaryApiResponse
 *
 * LLM-generated rollup summary of a person's interaction history.
 */
final class PersonSummaryApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'createdAt',
    'facts',
    'summary',
];

    /**
     * Timestamp (UTC, ISO-8601) when this summary was generated and persisted.
     * Example: "2026-09-15T10:12:33.421Z"
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Facts compiled across this person's interactions, holding the most recently observed value for each fact name. Empty list if no facts were extracted.
     */
    public \InfobipSDK\Collections\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\PersonSummaryApiResponse\FactsCollection $facts;
    /**
     * LLM-generated summary of this person's interaction history.
     * Example: "Returning customer who recently upgraded their mobile plan and has repeatedly asked about international roaming fees."
     */
    public string $summary;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'facts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->facts = new \InfobipSDK\Collections\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\PersonSummaryApiResponse\FactsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\PersonSummaryFactApiResponse::class)) : parent::assignMember($name, $value),
            'summary' => is_string($value) ? $this->summary = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
