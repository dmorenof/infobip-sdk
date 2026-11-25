<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotNestedInboundMessage
 */
class ViberBotNestedInboundMessage extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotContactNestedInboundMessage' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotContactNestedInboundMessage',
        '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotFileNestedInboundMessage' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotFileNestedInboundMessage',
        '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotImageNestedInboundMessage' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotImageNestedInboundMessage',
        '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotLocationNestedInboundMessage' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotLocationNestedInboundMessage',
        '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotStickerNestedInboundMessage' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotStickerNestedInboundMessage',
        '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotTextNestedInboundMessage' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotTextNestedInboundMessage',
        '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotVideoNestedInboundMessage' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotVideoNestedInboundMessage',
        'CONTACT' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotContactNestedInboundMessage',
        'FILE' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotFileNestedInboundMessage',
        'IMAGE' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotImageNestedInboundMessage',
        'LOCATION' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotLocationNestedInboundMessage',
        'STICKER' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotStickerNestedInboundMessage',
        'TEXT' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotTextNestedInboundMessage',
        'VIDEO' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotVideoNestedInboundMessage',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotInboundMessageType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotInboundMessageType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
