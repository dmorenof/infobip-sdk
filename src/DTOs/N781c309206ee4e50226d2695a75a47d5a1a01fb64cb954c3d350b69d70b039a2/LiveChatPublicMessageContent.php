<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * LiveChatPublicMessageContent
 */
class LiveChatPublicMessageContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.LiveChatAudioMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatAudioMessageContent',
    '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.LiveChatButtonMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatButtonMessageContent',
    '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.LiveChatCarouselMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatCarouselMessageContent',
    '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.LiveChatDocumentMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatDocumentMessageContent',
    '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.LiveChatImageMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatImageMessageContent',
    '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.LiveChatTextMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatTextMessageContent',
    '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.LiveChatVideoMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatVideoMessageContent',
    'AUDIO' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatAudioMessageContent',
    'BUTTON' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatButtonMessageContent',
    'CAROUSEL' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatCarouselMessageContent',
    'DOCUMENT' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatDocumentMessageContent',
    'IMAGE' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatImageMessageContent',
    'TEXT' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatTextMessageContent',
    'VIDEO' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\LiveChatVideoMessageContent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\LiveChatMessageContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\LiveChatMessageContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
