<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * CreateMessageApiRequest
 */
final class CreateMessageApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'channel',
        'content',
        'contentType',
        'from',
        'to',
    ];

    /**
     * Available communication channels
     */
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\CreateMessageApiRequest\ChannelEnum $channel;
    public \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageContent $content;
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ContentType $contentType;
    /**
     * Sender phone number, email address, FB messenger Id or live chat widget Id.
     */
    public string $from;
    /**
     * Quoted message ID - available for WhatsApp messages
     */
    public string $replyToMessageId;
    /**
     * Destination phone number, email address, FB messenger or live chat user Id.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\CreateMessageApiRequest\ChannelEnum::from($value) : parent::assignMember($name, $value),
            'contentType' => is_string($value) ? $this->contentType = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ContentType::from($value) : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'replyToMessageId' => is_string($value) ? $this->replyToMessageId = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
