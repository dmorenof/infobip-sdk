<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotButton
 */
final class ViberBotButton extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'action',
];

    protected const array VALIDATION = [
    'columns' => [
        'minimum' => 1,
        'maximum' => 6,
        'format' => 'int32',
    ],
    'rows' => [
        'minimum' => 1,
        'format' => 'int32',
    ],
];

    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonAction $action;
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonBackground $background;
    /**
     * Format: int32
     */
    public int $columns {
        set {
            $this->assigning('columns', $value);
            $this->columns = $value;
        }
    }
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonMedia $media;
    /**
     * Format: int32
     */
    public int $rows {
        set {
            $this->assigning('rows', $value);
            $this->rows = $value;
        }
    }
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonText $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => $value instanceof \stdClass ? $this->action = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonAction($value) : parent::assignMember($name, $value),
            'background' => $value instanceof \stdClass ? $this->background = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonBackground($value) : parent::assignMember($name, $value),
            'columns' => is_int($value) ? $this->columns = $value : parent::assignMember($name, $value),
            'media' => $value instanceof \stdClass ? $this->media = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonMedia($value) : parent::assignMember($name, $value),
            'rows' => is_int($value) ? $this->rows = $value : parent::assignMember($name, $value),
            'text' => $value instanceof \stdClass ? $this->text = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonText($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
