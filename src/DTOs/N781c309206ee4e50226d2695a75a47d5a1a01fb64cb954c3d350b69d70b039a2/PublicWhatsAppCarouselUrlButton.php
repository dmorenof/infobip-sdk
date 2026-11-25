<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * PublicWhatsAppCarouselUrlButton
 */
final class PublicWhatsAppCarouselUrlButton extends \Dmorenof\SdkRuntime\DTO
{
    public string $displayText;
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'displayText' => is_string($value) ? $this->displayText = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
