<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * ConversationWebhookReport
 */
class ConversationWebhookReport extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'timestamp',
        'type',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationAgentStatusChangedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationAgentStatusChangedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationAssignmentUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationAssignmentUpdatedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationCreatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationCreatedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationCustomerUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationCustomerUpdatedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationDeletedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationDeletedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationFormFieldUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationFormFieldUpdatedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationFormUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationFormUpdatedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationMessageUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationMessageUpdatedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationNoteAddedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationNoteAddedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationNoteRemovedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationNoteRemovedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationNoteUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationNoteUpdatedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationPriorityUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationPriorityUpdatedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationQueueUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationQueueUpdatedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationSlaPolicyUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationSlaPolicyUpdatedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationStatusUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationStatusUpdatedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationSummaryUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationSummaryUpdatedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationTagAddedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationTagAddedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationTagRemovedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationTagRemovedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.ConversationTopicUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationTopicUpdatedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.InboundMessageDeletedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\InboundMessageDeletedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.InboundMessageReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\InboundMessageReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.InboundMessageUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\InboundMessageUpdatedReport',
        '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.OutboundMessageReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\OutboundMessageReport',
        'CONVERSATION_AGENT_STATUS_CHANGED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationAgentStatusChangedReport',
        'CONVERSATION_ASSIGNMENT_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationAssignmentUpdatedReport',
        'CONVERSATION_CREATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationCreatedReport',
        'CONVERSATION_CUSTOMER_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationCustomerUpdatedReport',
        'CONVERSATION_DELETED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationDeletedReport',
        'CONVERSATION_FORM_FIELD_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationFormFieldUpdatedReport',
        'CONVERSATION_FORM_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationFormUpdatedReport',
        'CONVERSATION_MESSAGE_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationMessageUpdatedReport',
        'CONVERSATION_NOTE_ADDED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationNoteAddedReport',
        'CONVERSATION_NOTE_REMOVED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationNoteRemovedReport',
        'CONVERSATION_NOTE_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationNoteUpdatedReport',
        'CONVERSATION_PRIORITY_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationPriorityUpdatedReport',
        'CONVERSATION_QUEUE_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationQueueUpdatedReport',
        'CONVERSATION_SLA_POLICY_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationSlaPolicyUpdatedReport',
        'CONVERSATION_STATUS_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationStatusUpdatedReport',
        'CONVERSATION_SUMMARY_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationSummaryUpdatedReport',
        'CONVERSATION_TAG_ADDED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationTagAddedReport',
        'CONVERSATION_TAG_REMOVED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationTagRemovedReport',
        'CONVERSATION_TOPIC_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\ConversationTopicUpdatedReport',
        'INBOUND_MESSAGE' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\InboundMessageReport',
        'INBOUND_MESSAGE_DELETED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\InboundMessageDeletedReport',
        'INBOUND_MESSAGE_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\InboundMessageUpdatedReport',
        'OUTBOUND_MESSAGE' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\OutboundMessageReport',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Date and time of the event.
     * Example: "2025-10-31T13:47:40.032+00:00"
     */
    public string $timestamp;
    /**
     * Defines the type of conversation event being delivered.
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'timestamp' => is_string($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
