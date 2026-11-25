<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * WhatsAppCarouselMessageContent
 */
final class WhatsAppCarouselMessageContent extends \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppPublicMessageContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppCarouselActionType $actionType;
    public string $body;
    public \InfobipSDK\Collections\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppCarouselMessageContent\CardsCollection $cards;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionType' => is_string($value) ? $this->actionType = \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppCarouselActionType::from($value) : parent::assignMember($name, $value),
            'body' => is_string($value) ? $this->body = $value : parent::assignMember($name, $value),
            'cards' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->cards = new \InfobipSDK\Collections\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppCarouselMessageContent\CardsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\PublicWhatsAppCarouselCard::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
