<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c;

/**
 * InteractionMemoryApiResponse
 *
 * A single interaction memory derived from one customer interaction.
 */
final class InteractionMemoryApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'createdAt',
        'facts',
        'interactionId',
        'updatedAt',
    ];

    /**
     * Timestamp (UTC, ISO-8601) when the memory was first persisted.
     * Example: "2026-09-15T10:12:33.421Z"
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Structured facts extracted from the interaction. Empty list if no facts were extracted.
     */
    public \InfobipSDK\Collections\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\InteractionMemoryApiResponse\FactsCollection $facts;
    /**
     * Unique identifier of the source interaction.
     * Example: "7f3b1c2a-9d4e-4b1a-8c5d-1a2b3c4d5e6f"
     * Format: uuid
     */
    public string $interactionId;
    public \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\MemoryTopicApiResponse $memoryTopic;
    /**
     * Classified sentiment of the interaction. May be `null` if not yet classified.
     * Example: "POSITIVE"
     */
    public ?string $sentiment;
    /**
     * Free-text summary of the interaction. May be `null` if a summary was not produced yet.
     * Example: "Customer asked to upgrade their mobile plan to a higher data tier."
     */
    public ?string $summary;
    /**
     * Timestamp (UTC, ISO-8601) when the memory was last updated.
     * Example: "2026-09-15T10:18:04.112Z"
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'facts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->facts = new \InfobipSDK\Collections\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\InteractionMemoryApiResponse\FactsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\InteractionFactApiResponse::class)) : parent::assignMember($name, $value),
            'interactionId' => is_string($value) ? $this->interactionId = $value : parent::assignMember($name, $value),
            'memoryTopic' => $value instanceof \stdClass ? $this->memoryTopic = new \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\MemoryTopicApiResponse($value) : parent::assignMember($name, $value),
            'sentiment' => $value === null || is_string($value) ? $this->sentiment = $value : parent::assignMember($name, $value),
            'summary' => $value === null || is_string($value) ? $this->summary = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
