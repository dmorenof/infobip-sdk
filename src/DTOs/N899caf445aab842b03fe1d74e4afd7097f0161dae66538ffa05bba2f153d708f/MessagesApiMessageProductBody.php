<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageProductBody
 */
final class MessagesApiMessageProductBody extends \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageBody
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'catalogId' => [
        'minLength' => 1,
    ],
    'sections' => [
        'minItems' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The ID that uniquely identifies the catalog
     */
    public string $catalogId {
        set {
            $this->assigning('catalogId', $value);
            $this->catalogId = $value;
        }
    }
    /**
     * An array of product sections. Header and title fields are required in case of multiple products.
     */
    public \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageProductBody\SectionsCollection $sections {
        set {
            $this->assigning('sections', $value);
            $this->sections = $value;
        }
    }
    /**
     * Content of message body. Required only for multi-product messages.
     */
    public string $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'catalogId' => is_string($value) ? $this->catalogId = $value : parent::assignMember($name, $value),
            'sections' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->sections = new \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageProductBody\SectionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageProductSection::class)) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
