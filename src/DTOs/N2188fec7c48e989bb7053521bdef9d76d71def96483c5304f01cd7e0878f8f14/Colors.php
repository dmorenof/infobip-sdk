<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * Colors
 *
 * Colors settings. If not specified, the default colors will be used.
 */
final class Colors extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Background color in the hexadecimal format.
     */
    public string $background;
    /**
     * Primary color of a theme in the hexadecimal format.
     */
    public string $primary;
    /**
     * Primary color of a text in the hexadecimal format.
     */
    public string $primaryText;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'background' => is_string($value) ? $this->background = $value : parent::assignMember($name, $value),
            'primary' => is_string($value) ? $this->primary = $value : parent::assignMember($name, $value),
            'primaryText' => is_string($value) ? $this->primaryText = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
