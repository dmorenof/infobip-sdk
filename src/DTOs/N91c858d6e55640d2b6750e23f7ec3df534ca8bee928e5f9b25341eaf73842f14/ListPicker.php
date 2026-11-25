<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * ListPicker
 *
 * Object describing list picker's sections.
 */
final class ListPicker extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'sections',
];

    protected const array VALIDATION = [
    'sections' => [
        'minItems' => 1,
    ],
];

    /**
     * An array of list picker sections.
     */
    public \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\ListPicker\SectionsCollection $sections {
        set {
            $this->assigning('sections', $value);
            $this->sections = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'sections' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->sections = new \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\ListPicker\SectionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\ListPickerSection::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
