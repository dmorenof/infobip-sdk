<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiTemplateMultiProductButtonSection
 *
 * An array of multi product sections.
 */
final class MessagesApiTemplateMultiProductButtonSection extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'productIds',
    'title',
];

    protected const array VALIDATION = [
    'productIds' => [
        'minItems' => 1,
    ],
    'title' => [
        'minLength' => 0,
        'maxLength' => 24,
    ],
];

    /**
     * An array of product-unique identifiers as defined in the catalog. If product retailer ID doesn't exist in your catalog, the product won't be displayed.
     */
    public \InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CreateUpdateArticleRequest\TagsCollection $productIds {
        set {
            $this->assigning('productIds', $value);
            $this->productIds = $value;
        }
    }
    /**
     * Title of the section.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'productIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->productIds = new \InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CreateUpdateArticleRequest\TagsCollection($value) : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
