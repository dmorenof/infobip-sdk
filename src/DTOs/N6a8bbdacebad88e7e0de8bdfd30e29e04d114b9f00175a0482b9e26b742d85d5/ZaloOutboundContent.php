<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * ZaloOutboundContent
 *
 * Message content.
 */
class ZaloOutboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloOutboundFileContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloOutboundFileContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloOutboundGifContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloOutboundGifContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloOutboundImageContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloOutboundImageContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloOutboundQuoteConsultationContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloOutboundQuoteConsultationContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloOutboundReactionContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloOutboundReactionContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloOutboundStickerContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloOutboundStickerContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloOutboundTemplateContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloOutboundTemplateContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloOutboundTextContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloOutboundTextContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloOutboundUserInformationRequestFormContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloOutboundUserInformationRequestFormContent',
    'FILE' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloOutboundFileContent',
    'GIF' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloOutboundGifContent',
    'IMAGE' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloOutboundImageContent',
    'QUOTE_CONSULTATION' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloOutboundQuoteConsultationContent',
    'REACTION' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloOutboundReactionContent',
    'STICKER' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloOutboundStickerContent',
    'TEMPLATE' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloOutboundTemplateContent',
    'TEXT' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloOutboundTextContent',
    'USER_INFORMATION_REQUEST_FORM' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloOutboundUserInformationRequestFormContent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloOutboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloOutboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
