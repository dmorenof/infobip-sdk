<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveListActionContent
 *
 * Allows you to specify the title of the list and its sections. Each section can have a title and multiple rows to select.
 */
final class InteractiveListActionContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'sections',
    'title',
];

    protected const array VALIDATION = [
    'sections' => [
        'minItems' => 1,
        'maxItems' => 10,
    ],
    'title' => [
        'minLength' => 1,
        'maxLength' => 20,
    ],
];

    /**
     * Array of sections in the list.
     */
    public \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveListActionContent\SectionsCollection $sections {
        set {
            $this->assigning('sections', $value);
            $this->sections = $value;
        }
    }
    /**
     * Title of the list. Does not allow emojis or markdown.
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
            'sections' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->sections = new \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveListActionContent\SectionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveListSectionContent::class)) : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
