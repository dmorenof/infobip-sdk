<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * TopicPayload
 *
 * Topic classification entries for the interaction.
 */
final class TopicPayload extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'category',
        'outcome',
        'outcomeReason',
        'subcategory',
        'topic',
    ];

    /**
     * Top-level topic category.
     * Example: "SUPPORT"
     */
    public string $category;
    /**
     * Topic-level outcome value.
     * Example: "RESOLVED"
     */
    public string $outcome;
    /**
     * Explanation of the topic outcome.
     * Example: "Customer received tracking number."
     */
    public string $outcomeReason;
    /**
     * Topic subcategory within the category.
     * Example: "ORDER"
     */
    public string $subcategory;
    /**
     * Specific topic label.
     * Example: "ORDER_STATUS"
     */
    public string $topic;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'category' => is_string($value) ? $this->category = $value : parent::assignMember($name, $value),
            'outcome' => is_string($value) ? $this->outcome = $value : parent::assignMember($name, $value),
            'outcomeReason' => is_string($value) ? $this->outcomeReason = $value : parent::assignMember($name, $value),
            'subcategory' => is_string($value) ? $this->subcategory = $value : parent::assignMember($name, $value),
            'topic' => is_string($value) ? $this->topic = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
