<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * LiveChatCarouselCard
 */
final class LiveChatCarouselCard extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Collections\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\LiveChatButtonMessageContent\ButtonsCollection $actions;
    public string $image;
    public string $imageUrl;
    public string $title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->actions = new \InfobipSDK\Collections\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\LiveChatButtonMessageContent\ButtonsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\LiveChatAction::class)) : parent::assignMember($name, $value),
            'image' => is_string($value) ? $this->image = $value : parent::assignMember($name, $value),
            'imageUrl' => is_string($value) ? $this->imageUrl = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
