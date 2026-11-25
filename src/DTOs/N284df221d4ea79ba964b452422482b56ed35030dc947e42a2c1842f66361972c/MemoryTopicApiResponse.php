<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c;

/**
 * MemoryTopicApiResponse
 *
 * Interaction-level outcome and the list of individual topics covered.
 */
final class MemoryTopicApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'outcome',
        'outcomeReason',
        'topics',
    ];

    /**
     * Interaction-level outcome value aggregated from the topics.
     * Example: "RESOLVED"
     */
    public string $outcome;
    /**
     * Explanation of the interaction-level outcome.
     * Example: "Customer confirmed the plan upgrade and agreed to the new monthly price."
     */
    public string $outcomeReason;
    /**
     * Individual topics classified within this interaction.
     */
    public \InfobipSDK\Collections\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\MemoryTopicApiResponse\TopicsCollection $topics;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'outcome' => is_string($value) ? $this->outcome = $value : parent::assignMember($name, $value),
            'outcomeReason' => is_string($value) ? $this->outcomeReason = $value : parent::assignMember($name, $value),
            'topics' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->topics = new \InfobipSDK\Collections\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\MemoryTopicApiResponse\TopicsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\TopicApiResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
