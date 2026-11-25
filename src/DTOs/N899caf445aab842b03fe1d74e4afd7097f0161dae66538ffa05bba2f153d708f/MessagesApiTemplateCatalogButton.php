<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiTemplateCatalogButton
 */
final class MessagesApiTemplateCatalogButton extends \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiTemplateButton
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'productId' => [
        'minLength' => 0,
        'maxLength' => 3000,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Product-unique identifier from the catalog.
     */
    public string $productId {
        set {
            $this->assigning('productId', $value);
            $this->productId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'productId' => is_string($value) ? $this->productId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
