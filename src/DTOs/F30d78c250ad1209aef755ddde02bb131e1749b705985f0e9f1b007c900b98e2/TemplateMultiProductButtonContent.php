<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * TemplateMultiProductButtonContent
 */
final class TemplateMultiProductButtonContent extends \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateButtonContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'sections' => [
            'minItems' => 1,
            'maxItems' => 10,
        ],
        'thumbnailProductRetailerId' => [
            'minLength' => 0,
            'maxLength' => 3000,
        ],
    ];

    /**
     * An array of multi product sections.
     */
    public \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateMultiProductButtonContent\SectionsCollection $sections {
        set {
            $this->assigning('sections', $value);
            $this->sections = $value;
        }
    }
    /**
     * Product-unique identifier, as defined in catalog. If omitted, the image of the first item in your catalog will be used.
     */
    public string $thumbnailProductRetailerId {
        set {
            $this->assigning('thumbnailProductRetailerId', $value);
            $this->thumbnailProductRetailerId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'sections' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->sections = new \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateMultiProductButtonContent\SectionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\MultiProductSectionContent::class)) : parent::assignMember($name, $value),
            'thumbnailProductRetailerId' => is_string($value) ? $this->thumbnailProductRetailerId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
