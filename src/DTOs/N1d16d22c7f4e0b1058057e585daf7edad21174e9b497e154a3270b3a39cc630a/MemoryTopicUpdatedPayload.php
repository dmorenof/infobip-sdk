<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * MemoryTopicUpdatedPayload
 *
 * Contains the context event-specific data.
 */
final class MemoryTopicUpdatedPayload extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'interaction',
    'person',
    'topics',
];

    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\MemoryInteractionContext $interaction;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\Journey $journey;
    /**
     * Interaction outcome value.
     * Example: "RESOLVED"
     */
    public string $outcome;
    /**
     * Explanation of the interaction outcome.
     * Example: "Customer confirmed order shipped."
     */
    public string $outcomeReason;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\Person $person;
    /**
     * Topic classification entries for the interaction.
     */
    public \InfobipSDK\Collections\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\MemoryTopicUpdatedPayload\TopicsCollection $topics;
    /**
     * When this memory was last persisted, in `yyyy-MM-dd'T'HH:mm:ss.SSSZ` format.
     * Example: "2026-09-24T10:16:00.534Z"
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interaction' => $value instanceof \stdClass ? $this->interaction = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\MemoryInteractionContext($value) : parent::assignMember($name, $value),
            'journey' => $value instanceof \stdClass ? $this->journey = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\Journey($value) : parent::assignMember($name, $value),
            'outcome' => is_string($value) ? $this->outcome = $value : parent::assignMember($name, $value),
            'outcomeReason' => is_string($value) ? $this->outcomeReason = $value : parent::assignMember($name, $value),
            'person' => $value instanceof \stdClass ? $this->person = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\Person($value) : parent::assignMember($name, $value),
            'topics' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->topics = new \InfobipSDK\Collections\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\MemoryTopicUpdatedPayload\TopicsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\TopicPayload::class)) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
