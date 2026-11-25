<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * WhatsAppPublicMessageContent
 */
class WhatsAppPublicMessageContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppAudioMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppAudioMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppButtonMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppButtonMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppCarouselMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppCarouselMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppDocumentMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppDocumentMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppImageMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppImageMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppListMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppListMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppLocationMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppLocationMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppLocationRequestMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppLocationRequestMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppStickerMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppStickerMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppTextMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppTextMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppUrlButtonMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppUrlButtonMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.WhatsAppVideoMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppVideoMessageContent',
        'AUDIO' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppAudioMessageContent',
        'BUTTON' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppButtonMessageContent',
        'CAROUSEL' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppCarouselMessageContent',
        'DOCUMENT' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppDocumentMessageContent',
        'IMAGE' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppImageMessageContent',
        'LIST' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppListMessageContent',
        'LOCATION' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppLocationMessageContent',
        'LOCATION_REQUEST' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppLocationRequestMessageContent',
        'STICKER' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppStickerMessageContent',
        'TEXT' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppTextMessageContent',
        'URL_BUTTON' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppUrlButtonMessageContent',
        'VIDEO' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\WhatsAppVideoMessageContent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppMessageContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppMessageContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
