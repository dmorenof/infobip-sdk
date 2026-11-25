<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * BlockComponentStyle
 */
final class BlockComponentStyle extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'backgroundColor' => [
            'pattern' => '^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$',
        ],
    ];

    public string $backgroundColor {
        set {
            $this->assigning('backgroundColor', $value);
            $this->backgroundColor = $value;
        }
    }
    public bool $separator;
    public string $separatorColor;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'backgroundColor' => is_string($value) ? $this->backgroundColor = $value : parent::assignMember($name, $value),
            'separator' => is_bool($value) ? $this->separator = $value : parent::assignMember($name, $value),
            'separatorColor' => is_string($value) ? $this->separatorColor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
