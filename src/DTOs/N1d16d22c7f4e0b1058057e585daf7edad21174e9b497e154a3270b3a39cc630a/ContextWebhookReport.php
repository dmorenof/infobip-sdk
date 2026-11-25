<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * ContextWebhookReport
 */
class ContextWebhookReport extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'timestamp',
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.MemoryFactsUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\MemoryFactsUpdatedReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.MemorySentimentUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\MemorySentimentUpdatedReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.MemorySummaryUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\MemorySummaryUpdatedReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.MemoryTopicUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\MemoryTopicUpdatedReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.PersonSummaryUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonSummaryUpdatedReport',
    'CONTEXT_MEMORY_FACTS_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\MemoryFactsUpdatedReport',
    'CONTEXT_MEMORY_SENTIMENT_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\MemorySentimentUpdatedReport',
    'CONTEXT_MEMORY_SUMMARY_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\MemorySummaryUpdatedReport',
    'CONTEXT_MEMORY_TOPIC_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\MemoryTopicUpdatedReport',
    'CONTEXT_PERSON_SUMMARY_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonSummaryUpdatedReport',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Date and time of the event.
     * Example: "2026-09-24T10:16:00.534Z"
     * Format: date-time
     */
    public string $timestamp;
    /**
     * Defines the type of context event being delivered.
     */
    public \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\ContextWebhookReport\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'timestamp' => is_string($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\ContextWebhookReport\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
