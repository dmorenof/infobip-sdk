<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958;

/**
 * LiveChatOutboundContent
 *
 * Messages sent to the end user.
 */
class LiveChatOutboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatOutboundAiAgentResponseContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundAiAgentResponseContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatOutboundAudioContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundAudioContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatOutboundButtonContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundButtonContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatOutboundCallContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundCallContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatOutboundCarouselContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundCarouselContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatOutboundCustomDataContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundCustomDataContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatOutboundDocumentWithCaptionContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundDocumentWithCaptionContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatOutboundImageWithCaptionContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundImageWithCaptionContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatOutboundQuickReplyContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundQuickReplyContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatOutboundSurveyRequestContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundSurveyRequestContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatOutboundTextContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundTextContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatOutboundVideoWithCaptionContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundVideoWithCaptionContent',
        'AI_AGENT_REPLY' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundAiAgentResponseContent',
        'AUDIO' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundAudioContent',
        'CALL' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundCallContent',
        'CAROUSEL' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundCarouselContent',
        'CUSTOM_DATA' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundCustomDataContent',
        'DOCUMENT' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundDocumentWithCaptionContent',
        'IMAGE' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundImageWithCaptionContent',
        'LIVE_CHAT_BUTTON' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundButtonContent',
        'QUICK_REPLY' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundQuickReplyContent',
        'SURVEY_REQUEST' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundSurveyRequestContent',
        'TEXT' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundTextContent',
        'VIDEO' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatOutboundVideoWithCaptionContent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatOutboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatOutboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
