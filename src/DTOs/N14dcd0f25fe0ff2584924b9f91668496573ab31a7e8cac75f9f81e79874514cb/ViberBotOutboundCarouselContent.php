<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotOutboundCarouselContent
 */
final class ViberBotOutboundCarouselContent extends \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOutboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'backgroundColor' => [
            'pattern' => '^[#]([A-Fa-f0-9]{6})$',
        ],
        'heightScale' => [
            'minimum' => 20,
            'maximum' => 100,
            'format' => 'int32',
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $backgroundColor {
        set {
            $this->assigning('backgroundColor', $value);
            $this->backgroundColor = $value;
        }
    }
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonGrid $buttonGrid;
    /**
     * Format: int32
     */
    public int $heightScale {
        set {
            $this->assigning('heightScale', $value);
            $this->heightScale = $value;
        }
    }
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotKeyboard $keyboard;
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotSenderDisplayInfo $senderDisplayInfo;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'backgroundColor' => is_string($value) ? $this->backgroundColor = $value : parent::assignMember($name, $value),
            'buttonGrid' => $value instanceof \stdClass ? $this->buttonGrid = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonGrid($value) : parent::assignMember($name, $value),
            'heightScale' => is_int($value) ? $this->heightScale = $value : parent::assignMember($name, $value),
            'keyboard' => $value instanceof \stdClass ? $this->keyboard = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotKeyboard($value) : parent::assignMember($name, $value),
            'senderDisplayInfo' => $value instanceof \stdClass ? $this->senderDisplayInfo = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotSenderDisplayInfo($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
