<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * Images
 *
 * Enumerate images shown on a call link page. Once an image is uploaded (by using the image upload API) a unique ID returned in that response can be used to add a background image or a logo image.
 */
final class Images extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of an image shown as a background on a call link page.
     */
    public string $backgroundImageId;
    /**
     * ID of an image shown as a logo on a call link page.
     */
    public string $logoImageId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'backgroundImageId' => is_string($value) ? $this->backgroundImageId = $value : parent::assignMember($name, $value),
            'logoImageId' => is_string($value) ? $this->logoImageId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
