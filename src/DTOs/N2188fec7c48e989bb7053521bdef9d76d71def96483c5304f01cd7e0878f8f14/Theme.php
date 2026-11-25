<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * Theme
 *
 * Call link theme-specific configuration settings. Use it to add image, color, and text selections to customize a call link page.
 */
final class Theme extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Colors $colors;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Images $images;
    /**
     * Represents layout during the call.When GRID layout is selected, multiple video streams are displayed simultaneously and user can spotlight specific video stream.When SOLO layout is selected, an user can see only his video streams.If there are more than one layout in this list, the first one will be initially selected, and users can change it during the call.The default layout will be set to GRID.
     */
    public \InfobipSDK\Collections\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Theme\LayoutsCollection $layouts;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Localization $localization;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Messages $messages;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'colors' => $value instanceof \stdClass ? $this->colors = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Colors($value) : parent::assignMember($name, $value),
            'images' => $value instanceof \stdClass ? $this->images = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Images($value) : parent::assignMember($name, $value),
            'messages' => $value instanceof \stdClass ? $this->messages = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Messages($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
