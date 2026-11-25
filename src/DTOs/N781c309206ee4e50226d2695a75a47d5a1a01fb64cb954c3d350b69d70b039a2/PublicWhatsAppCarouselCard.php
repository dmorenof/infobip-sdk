<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * PublicWhatsAppCarouselCard
 */
final class PublicWhatsAppCarouselCard extends \Dmorenof\SdkRuntime\DTO
{
    public string $body;
    public \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\PublicWhatsAppCarouselUrlButton $button;
    public \InfobipSDK\Collections\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\PublicWhatsAppCarouselCard\ButtonsCollection $buttons;
    public \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppHeader $header;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => is_string($value) ? $this->body = $value : parent::assignMember($name, $value),
            'button' => $value instanceof \stdClass ? $this->button = new \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\PublicWhatsAppCarouselUrlButton($value) : parent::assignMember($name, $value),
            'buttons' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->buttons = new \InfobipSDK\Collections\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\PublicWhatsAppCarouselCard\ButtonsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppButtonAction::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
