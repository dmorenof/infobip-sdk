<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958;

/**
 * LiveChatInboundContent
 *
 * Message content.
 */
class LiveChatInboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatInboundAudioContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundAudioContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatInboundBundleContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundBundleContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatInboundButtonResponseContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundButtonResponseContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatInboundCallContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundCallContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatInboundCustomDataContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundCustomDataContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatInboundDocumentContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundDocumentContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatInboundImageContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundImageContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatInboundSurveyResponseContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundSurveyResponseContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatInboundTextContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundTextContent',
        '245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958.LiveChatInboundVideoContent' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundVideoContent',
        'AUDIO' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundAudioContent',
        'BUNDLE' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundBundleContent',
        'BUTTON_RESPONSE' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundButtonResponseContent',
        'CALL' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundCallContent',
        'CUSTOM_DATA' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundCustomDataContent',
        'DOCUMENT' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundDocumentContent',
        'IMAGE' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundImageContent',
        'SURVEY_RESPONSE' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundSurveyResponseContent',
        'TEXT' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundTextContent',
        'VIDEO' => 'InfobipSDK\\DTOs\\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\\LiveChatInboundVideoContent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatInboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatInboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
