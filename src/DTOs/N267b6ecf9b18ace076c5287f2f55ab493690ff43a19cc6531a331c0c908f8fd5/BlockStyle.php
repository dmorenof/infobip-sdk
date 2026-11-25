<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5;

/**
 * BlockStyle
 *
 * Style applied to a single block of a bubble.
 */
final class BlockStyle extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Background color of the block as a hexadecimal color code.
     */
    public string $backgroundColor;
    /**
     * Whether to place a separator above the block. A separator can't be placed above the first block.
     */
    public bool $separator;
    /**
     * Color of the separator as a hexadecimal color code.
     */
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
