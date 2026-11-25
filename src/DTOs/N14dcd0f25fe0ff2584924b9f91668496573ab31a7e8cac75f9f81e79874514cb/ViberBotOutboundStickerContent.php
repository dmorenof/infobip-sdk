<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotOutboundStickerContent
 */
final class ViberBotOutboundStickerContent extends \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOutboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotKeyboard $keyboard;
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotSenderDisplayInfo $senderDisplayInfo;
    /**
     * Unique Viber sticker ID
     * Format: int64
     */
    public int $stickerId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'keyboard' => $value instanceof \stdClass ? $this->keyboard = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotKeyboard($value) : parent::assignMember($name, $value),
            'senderDisplayInfo' => $value instanceof \stdClass ? $this->senderDisplayInfo = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotSenderDisplayInfo($value) : parent::assignMember($name, $value),
            'stickerId' => is_int($value) ? $this->stickerId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
