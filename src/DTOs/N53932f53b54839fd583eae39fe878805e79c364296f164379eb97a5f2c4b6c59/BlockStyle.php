<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * BlockStyle
 *
 * Style of the footer block.
 */
final class BlockStyle extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'backgroundColor' => [
            'pattern' => '^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$',
        ],
        'separatorColor' => [
            'pattern' => '^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$',
        ],
    ];

    /**
     * Background color of the block. Use a hexadecimal color code.
     * Example: "#FFFFFF"
     */
    public string $backgroundColor {
        set {
            $this->assigning('backgroundColor', $value);
            $this->backgroundColor = $value;
        }
    }
    /**
     * Whether a separator is displayed above the block.
     * Example: true
     */
    public bool $separator;
    /**
     * Color of the separator. Use a hexadecimal color code.
     * Example: "#E0E0E0"
     */
    public string $separatorColor {
        set {
            $this->assigning('separatorColor', $value);
            $this->separatorColor = $value;
        }
    }

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
