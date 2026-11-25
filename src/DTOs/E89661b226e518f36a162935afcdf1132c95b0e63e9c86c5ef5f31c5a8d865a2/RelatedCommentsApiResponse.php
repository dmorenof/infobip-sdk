<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * RelatedCommentsApiResponse
 * Example: {"conversationsMessage":{"id":1,"channel":"FACEBOOK_POST","from":"55555544444433333","to":"999990000011111","direction":"INBOUND","conversationId":"3f8c9a2e-1b6f-4d3a-9f5b-2e4b6c8d9e7f","authorId":"7a1d5b4c-8e2f-4c3b-b9a1-5f6d7e8f9a0b","authorType":"CUSTOMER","createdAt":"2025-01-10T08:51:23.100+00:00","updatedAt":"2025-01-10T08:51:23.100+00:00","content":{"text":"Hello!","showUrlPreview":null},"singleSendMessage":{"from":{"id":"55555544444433333","type":"SOCIAL_USER"},"to":{"externalId":"999990000011111","type":"SOCIAL_PAGE"},"content":{"commentMoContent":{"text":"Hello!","type":"TEXT"},"type":"COMMENT"},"socialContext":{"externalId":"999990000011111_123456789123457","postId":"987654321987_999990000011112","parentId":null,"permalinkUrl":null,"extCreated":"2025-01-10T08:51:23.100+00:00","username":"John Doe","actionType":"ADD"},"channel":"FACEBOOK_POST","direction":"INBOUND"},"contentType":"TEXT"},"olderComments":[{"id":null,"channel":"FACEBOOK_POST","authorName":"John Doe:123456789","direction":"INBOUND","conversationId":"a06b6abc-1c8f-4b4f-8600-f4f651418e8f","createdAt":"2025-01-09T08:51:23.100+00:00","content":{"text":"Test","showUrlPreview":null},"singleSendMessage":{"from":{"id":"55555544444433333","type":"SOCIAL_USER"},"to":{"externalId":"999990000011111","type":"SOCIAL_PAGE"},"content":{"commentMoContent":{"text":"Test","type":"TEXT"},"type":"COMMENT"},"socialContext":{"externalId":"999990000011111_123456789123456","postId":"987654321987_999990000011111","parentId":null,"permalinkUrl":null,"extCreated":"2025-01-09T08:51:17Z","username":"John Doe","actionType":"ADD"},"channel":"FACEBOOK_POST","direction":"INBOUND"},"contentType":"TEXT"}],"newerComments":[{"id":null,"channel":"FACEBOOK_POST","authorName":"Peter Northrop:8132498432","direction":"OUTBOUND","conversationId":"e50588de-123b-45c8-9f58-8e3376805646","createdAt":"2025-02-18T13:56:10.465+00:00","content":{"socialMentions":[],"text":"&#64;John Doe OK","showUrlPreview":null},"singleSendMessage":{"from":{"externalId":"999990000011111","type":"SOCIAL_PAGE"},"to":{"id":"8132498432","type":"SOCIAL_USER"},"content":{"text":"&#64;John Doe OK","type":"TEXT"},"replyToCommentId":"999990000011111_546621549845623","mentions":[],"channel":"FACEBOOK_POST","direction":"OUTBOUND"},"contentType":"TEXT"}]}
 */
final class RelatedCommentsApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageApiResponse $conversationsMessage;
    /**
     * Returns up to 50 comments created after the specified inbound comment, at the same level of the conversation.
     */
    public \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\RelatedCommentsApiResponse\NewerCommentsCollection $newerComments;
    /**
     * Returns up to 50 comments created before the specified inbound comment, at the same level of the conversation.
     */
    public \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\RelatedCommentsApiResponse\NewerCommentsCollection $olderComments;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conversationsMessage' => $value instanceof \stdClass ? $this->conversationsMessage = new \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageApiResponse($value) : parent::assignMember($name, $value),
            'newerComments' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->newerComments = new \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\RelatedCommentsApiResponse\NewerCommentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\RelatedMessageApiResponse::class)) : parent::assignMember($name, $value),
            'olderComments' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->olderComments = new \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\RelatedCommentsApiResponse\NewerCommentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\RelatedMessageApiResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
