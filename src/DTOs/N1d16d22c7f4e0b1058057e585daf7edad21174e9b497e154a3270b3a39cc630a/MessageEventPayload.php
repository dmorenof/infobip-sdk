<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * MessageEventPayload
 *
 * Contains the conversation event-specific data.
 */
final class MessageEventPayload extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'assignee',
        'channel',
        'customer',
        'direction',
        'form',
        'id',
        'invoker',
        'message',
        'priority',
        'queue',
        'status',
        'tags',
    ];

    protected const array VALIDATION = [
        'tags' => [
            'uniqueItems' => true,
        ],
    ];

    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\ConversationAssignee $assignee;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\AuthenticationData $authentication;
    /**
     * Conversation channel. See the list of [supported Conversations channels](https://www.infobip.com/docs/conversations#available-channels).
     * Example: "FACEBOOK_POST"
     */
    public string $channel;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\Customer $customer;
    /**
     * Conversation direction.
     * Example: "INBOUND"
     */
    public \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\MessageEventPayload\DirectionEnum $direction;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\ConversationForm $form;
    /**
     * Unique conversation ID. UUID v4 value.
     * Example: "bc28d99a-198f-48a1-96ad-5032891dd7ba"
     */
    public string $id;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\InteractionContext $interaction;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\Invoker $invoker;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\Message $message;
    /**
     * Conversation priority.
     * Example: "NORMAL"
     */
    public \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\MessageEventPayload\PriorityEnum $priority;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\ConversationQueue $queue;
    /**
     * Conversation short ID.
     * Example: "100"
     */
    public string $shortId;
    /**
     * Conversation status.
     * Example: "OPEN"
     */
    public \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\MessageEventPayload\StatusEnum $status;
    /**
     * Conversation summary.
     */
    public string $summary;
    /**
     * List of associated conversation tags.
     */
    public \InfobipSDK\Collections\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\ClosedConversationEventPayload\TagsCollection $tags {
        set {
            $this->assigning('tags', $value);
            $this->tags = $value;
        }
    }
    /**
     * Event timestamp in `yyyy-MM-dd'T'HH:mm:ss.SSSZ` format.
     * Example: "2025-03-21T13:20:55.013+00:00"
     */
    public string $timestamp;
    /**
     * Conversation topic.
     * Example: "Test Topic"
     */
    public string $topic;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'assignee' => $value instanceof \stdClass ? $this->assignee = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\ConversationAssignee($value) : parent::assignMember($name, $value),
            'authentication' => $value instanceof \stdClass ? $this->authentication = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\AuthenticationData($value) : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = $value : parent::assignMember($name, $value),
            'customer' => $value instanceof \stdClass ? $this->customer = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\Customer($value) : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\MessageEventPayload\DirectionEnum::from($value) : parent::assignMember($name, $value),
            'form' => $value instanceof \stdClass ? $this->form = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\ConversationForm($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'interaction' => $value instanceof \stdClass ? $this->interaction = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\InteractionContext($value) : parent::assignMember($name, $value),
            'invoker' => $value instanceof \stdClass ? $this->invoker = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\Invoker($value) : parent::assignMember($name, $value),
            'message' => $value instanceof \stdClass ? $this->message = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\Message($value) : parent::assignMember($name, $value),
            'priority' => is_string($value) ? $this->priority = \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\MessageEventPayload\PriorityEnum::from($value) : parent::assignMember($name, $value),
            'queue' => $value instanceof \stdClass ? $this->queue = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\ConversationQueue($value) : parent::assignMember($name, $value),
            'shortId' => is_string($value) ? $this->shortId = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\MessageEventPayload\StatusEnum::from($value) : parent::assignMember($name, $value),
            'summary' => is_string($value) ? $this->summary = $value : parent::assignMember($name, $value),
            'tags' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->tags = new \InfobipSDK\Collections\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\ClosedConversationEventPayload\TagsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\Tag::class)) : parent::assignMember($name, $value),
            'timestamp' => is_string($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'topic' => is_string($value) ? $this->topic = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
