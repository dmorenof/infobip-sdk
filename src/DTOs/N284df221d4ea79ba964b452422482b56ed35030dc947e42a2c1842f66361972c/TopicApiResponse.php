<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c;

/**
 * TopicApiResponse
 *
 * A single topic classified within an interaction, with its own outcome.
 */
final class TopicApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'outcome',
        'outcomeReason',
        'topic',
    ];

    /**
     * Topic-level outcome value.
     * Example: "RESOLVED"
     */
    public string $outcome;
    /**
     * Explanation of the topic outcome.
     * Example: "Agent confirmed activation of the new plan."
     */
    public string $outcomeReason;
    /**
     * Specific topic label.
     * Example: "plan_upgrade"
     */
    public string $topic;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'outcome' => is_string($value) ? $this->outcome = $value : parent::assignMember($name, $value),
            'outcomeReason' => is_string($value) ? $this->outcomeReason = $value : parent::assignMember($name, $value),
            'topic' => is_string($value) ? $this->topic = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
