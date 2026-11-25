<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotOutboundContent
 *
 * Message content.
 */
class ViberBotOutboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotOutboundCarouselContent' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotOutboundCarouselContent',
    '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotOutboundContactContent' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotOutboundContactContent',
    '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotOutboundFileContent' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotOutboundFileContent',
    '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotOutboundImageContent' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotOutboundImageContent',
    '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotOutboundLocationContent' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotOutboundLocationContent',
    '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotOutboundStickerContent' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotOutboundStickerContent',
    '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotOutboundTextContent' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotOutboundTextContent',
    '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotOutboundUrlContent' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotOutboundUrlContent',
    '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotOutboundVideoContent' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotOutboundVideoContent',
    'CAROUSEL' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotOutboundCarouselContent',
    'CONTACT' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotOutboundContactContent',
    'FILE' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotOutboundFileContent',
    'IMAGE' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotOutboundImageContent',
    'LOCATION' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotOutboundLocationContent',
    'STICKER' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotOutboundStickerContent',
    'TEXT' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotOutboundTextContent',
    'URL' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotOutboundUrlContent',
    'VIDEO' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotOutboundVideoContent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOutboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOutboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
