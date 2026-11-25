<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * WhatsAppPublicInboundMessageContent
 */
class WhatsAppPublicInboundMessageContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppAudioInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppAudioInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppButtonReplyInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppButtonReplyInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppCallReplyInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppCallReplyInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppContactInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppContactInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppDocumentInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppDocumentInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppFlowReplyInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppFlowReplyInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppImageInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppImageInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppListReplyInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppListReplyInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppLocationInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppLocationInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppOrderInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppOrderInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppQuickReplyInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppQuickReplyInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppTextInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppTextInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppVideoInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppVideoInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppVoiceInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppVoiceInboundMessageContent',
        'AUDIO' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppAudioInboundMessageContent',
        'BUTTON_REPLY' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppButtonReplyInboundMessageContent',
        'CALL_REPLY' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppCallReplyInboundMessageContent',
        'CONTACT' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppContactInboundMessageContent',
        'DOCUMENT' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppDocumentInboundMessageContent',
        'FLOW_REPLY' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppFlowReplyInboundMessageContent',
        'IMAGE' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppImageInboundMessageContent',
        'LIST_REPLY' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppListReplyInboundMessageContent',
        'LOCATION' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppLocationInboundMessageContent',
        'ORDER' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppOrderInboundMessageContent',
        'QUICK_REPLY' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppQuickReplyInboundMessageContent',
        'TEXT' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppTextInboundMessageContent',
        'VIDEO' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppVideoInboundMessageContent',
        'VOICE' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppVoiceInboundMessageContent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppInboundMessageContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppInboundMessageContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
