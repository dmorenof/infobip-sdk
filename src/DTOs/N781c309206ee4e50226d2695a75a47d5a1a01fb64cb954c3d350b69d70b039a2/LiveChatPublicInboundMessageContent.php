<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * LiveChatPublicInboundMessageContent
 */
class LiveChatPublicInboundMessageContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.LiveChatAudioInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatAudioInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.LiveChatBundleInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatBundleInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.LiveChatButtonReplyInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatButtonReplyInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.LiveChatDocumentInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatDocumentInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.LiveChatImageInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatImageInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.LiveChatTextInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatTextInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.LiveChatVideoInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatVideoInboundMessageContent',
        'AUDIO' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatAudioInboundMessageContent',
        'BUNDLE' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatBundleInboundMessageContent',
        'BUTTON_REPLY' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatButtonReplyInboundMessageContent',
        'DOCUMENT' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatDocumentInboundMessageContent',
        'IMAGE' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatImageInboundMessageContent',
        'TEXT' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatTextInboundMessageContent',
        'VIDEO' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatVideoInboundMessageContent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\LiveChatInboundMessageContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\LiveChatInboundMessageContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
