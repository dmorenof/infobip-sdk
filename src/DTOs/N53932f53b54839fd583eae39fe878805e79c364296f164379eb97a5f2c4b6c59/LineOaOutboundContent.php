<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineOaOutboundContent
 *
 * Message content.
 */
class LineOaOutboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundAudioContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundAudioContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundFlexContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundFlexContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundImageContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundImageContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundImagemapContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundImagemapContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundLocationContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundLocationContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundMultipartContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundMultipartContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundStickerContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundStickerContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundTemplateContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundTemplateContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundTextContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundTextContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundVideoContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundVideoContent',
        'AUDIO' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundAudioContent',
        'FLEX' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundFlexContent',
        'IMAGE' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundImageContent',
        'IMAGEMAP' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundImagemapContent',
        'LOCATION' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundLocationContent',
        'MULTIPART' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundMultipartContent',
        'STICKER' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundStickerContent',
        'TEMPLATE' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundTemplateContent',
        'TEXT' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundTextContent',
        'VIDEO' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundVideoContent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaOutboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaOutboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
