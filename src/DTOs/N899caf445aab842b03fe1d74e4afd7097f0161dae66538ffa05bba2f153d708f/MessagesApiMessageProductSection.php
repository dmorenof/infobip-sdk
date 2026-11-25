<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageProductSection
 *
 * An array of product sections. Header and title fields are required in case of multiple products.
 */
final class MessagesApiMessageProductSection extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'productRetailerIds',
];

    protected const array VALIDATION = [
    'productRetailerIds' => [
        'minItems' => 1,
    ],
];

    /**
     * Unique product identifier, as defined in catalog.
     */
    public \InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CreateUpdateArticleRequest\TagsCollection $productRetailerIds {
        set {
            $this->assigning('productRetailerIds', $value);
            $this->productRetailerIds = $value;
        }
    }
    /**
     * The title of the section. Required, if the message has more than one section.
     */
    public string $title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'productRetailerIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->productRetailerIds = new \InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CreateUpdateArticleRequest\TagsCollection($value) : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
