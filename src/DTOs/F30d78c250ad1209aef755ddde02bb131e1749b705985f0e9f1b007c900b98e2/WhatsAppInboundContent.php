<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * WhatsAppInboundContent
 *
 * Message content.
 */
class WhatsAppInboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        'AUDIO' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundAudioContent',
        'BUTTON' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundQuickReplyContent',
        'CONTACT' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundContactsContent',
        'DOCUMENT' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundDocumentContent',
        'IMAGE' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundImageContent',
        'INFECTED_CONTENT' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundInfectedContent',
        'INTERACTIVE_BUTTON_REPLY' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundButtonReplyContent',
        'INTERACTIVE_CALL_PERMISSION_REPLY' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundCallPermissionReplyContent',
        'INTERACTIVE_FLOW_REPLY' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundFlowReplyContent',
        'INTERACTIVE_IN_THREAD_AUTHENTICATION_REPLY' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundInThreadAuthenticationReplyContent',
        'INTERACTIVE_LIST_REPLY' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundListReplyContent',
        'INTERACTIVE_PAYMENT_CONFIRMATION' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundPaymentConfirmationContent',
        'LOCATION' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundLocationContent',
        'ORDER' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundOrderContent',
        'REACTION' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundReactionContent',
        'STICKER' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundStickerContent',
        'TEXT' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundTextContent',
        'UNSUPPORTED' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundUnsupportedContent',
        'VIDEO' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundVideoContent',
        'VOICE' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundVoiceContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundAudioContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundAudioContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundButtonReplyContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundButtonReplyContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundCallPermissionReplyContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundCallPermissionReplyContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundContactsContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundContactsContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundDocumentContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundDocumentContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundFlowReplyContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundFlowReplyContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundImageContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundImageContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundInThreadAuthenticationReplyContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundInThreadAuthenticationReplyContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundInfectedContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundInfectedContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundListReplyContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundListReplyContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundLocationContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundLocationContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundOrderContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundOrderContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundPaymentConfirmationContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundPaymentConfirmationContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundQuickReplyContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundQuickReplyContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundReactionContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundReactionContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundStickerContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundStickerContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundTextContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundTextContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundUnsupportedContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundUnsupportedContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundVideoContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundVideoContent',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.WhatsAppInboundVoiceContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\WhatsAppInboundVoiceContent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\WhatsAppInboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\WhatsAppInboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
