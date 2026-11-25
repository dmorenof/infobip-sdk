<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotButtonGrid
 *
 * Grid of buttons
 */
final class ViberBotButtonGrid extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'buttons',
];

    protected const array VALIDATION = [
    'buttons' => [
        'minItems' => 1,
        'maxItems' => 2147483647,
    ],
    'buttonsGroupColumns' => [
        'minimum' => 1,
        'maximum' => 6,
        'format' => 'int32',
    ],
    'buttonsGroupRows' => [
        'minimum' => 1,
        'format' => 'int32',
    ],
];

    public \InfobipSDK\Collections\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonGrid\ButtonsCollection $buttons {
        set {
            $this->assigning('buttons', $value);
            $this->buttons = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $buttonsGroupColumns {
        set {
            $this->assigning('buttonsGroupColumns', $value);
            $this->buttonsGroupColumns = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $buttonsGroupRows {
        set {
            $this->assigning('buttonsGroupRows', $value);
            $this->buttonsGroupRows = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'buttons' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->buttons = new \InfobipSDK\Collections\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonGrid\ButtonsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButton::class)) : parent::assignMember($name, $value),
            'buttonsGroupColumns' => is_int($value) ? $this->buttonsGroupColumns = $value : parent::assignMember($name, $value),
            'buttonsGroupRows' => is_int($value) ? $this->buttonsGroupRows = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
