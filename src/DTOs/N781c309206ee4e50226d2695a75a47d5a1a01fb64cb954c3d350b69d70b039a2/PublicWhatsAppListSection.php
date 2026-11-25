<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * PublicWhatsAppListSection
 */
final class PublicWhatsAppListSection extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Collections\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\PublicWhatsAppListSection\ItemsCollection $items;
    public string $title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->items = new \InfobipSDK\Collections\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\PublicWhatsAppListSection\ItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\PublicWhatsAppListItem::class)) : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
