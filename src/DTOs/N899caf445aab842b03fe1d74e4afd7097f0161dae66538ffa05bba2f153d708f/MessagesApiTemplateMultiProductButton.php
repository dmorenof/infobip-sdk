<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiTemplateMultiProductButton
 */
final class MessagesApiTemplateMultiProductButton extends \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiTemplateButton
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'productId' => [
        'minLength' => 0,
        'maxLength' => 3000,
    ],
    'sections' => [
        'minItems' => 1,
        'maxItems' => 10,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Product-unique identifier, as defined in catalog. If omitted, the image of the first item in your catalog will be used.
     */
    public string $productId {
        set {
            $this->assigning('productId', $value);
            $this->productId = $value;
        }
    }
    /**
     * An array of multi product sections.
     */
    public \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiTemplateMultiProductButton\SectionsCollection $sections {
        set {
            $this->assigning('sections', $value);
            $this->sections = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'productId' => is_string($value) ? $this->productId = $value : parent::assignMember($name, $value),
            'sections' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->sections = new \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiTemplateMultiProductButton\SectionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiTemplateMultiProductButtonSection::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
