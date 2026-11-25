<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * TemplateCatalogButtonContent
 */
final class TemplateCatalogButtonContent extends \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateButtonContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'thumbnailProductRetailerId' => [
        'minLength' => 0,
        'maxLength' => 3000,
    ],
];

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
            'thumbnailProductRetailerId' => is_string($value) ? $this->thumbnailProductRetailerId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
