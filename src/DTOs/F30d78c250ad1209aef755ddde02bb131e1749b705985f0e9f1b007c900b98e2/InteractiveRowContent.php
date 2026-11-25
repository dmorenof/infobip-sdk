<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveRowContent
 *
 * An array of rows sent within a section. Section must contain at least one row. Message can have up to ten rows.
 */
final class InteractiveRowContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'title',
    ];

    protected const array VALIDATION = [
        'description' => [
            'minLength' => 0,
            'maxLength' => 72,
        ],
        'id' => [
            'minLength' => 1,
            'maxLength' => 200,
        ],
        'title' => [
            'minLength' => 1,
            'maxLength' => 24,
        ],
    ];

    /**
     * Description of the row.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Identifier of the row. It must be unique across all sections.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Title of the row.
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
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
