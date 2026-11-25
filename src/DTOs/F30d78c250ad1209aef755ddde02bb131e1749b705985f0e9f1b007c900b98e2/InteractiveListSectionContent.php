<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveListSectionContent
 *
 * Array of sections in the list.
 */
final class InteractiveListSectionContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'rows',
];

    protected const array VALIDATION = [
    'rows' => [
        'minItems' => 1,
    ],
    'title' => [
        'minLength' => 0,
        'maxLength' => 24,
    ],
];

    /**
     * An array of rows sent within a section. Section must contain at least one row. Message can have up to ten rows.
     */
    public \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveListSectionContent\RowsCollection $rows {
        set {
            $this->assigning('rows', $value);
            $this->rows = $value;
        }
    }
    /**
     * Title of the section. Required, if the message has more than one section.
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
            'rows' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->rows = new \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveListSectionContent\RowsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveRowContent::class)) : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
