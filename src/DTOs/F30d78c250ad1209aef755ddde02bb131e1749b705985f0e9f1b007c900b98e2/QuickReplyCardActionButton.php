<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * QuickReplyCardActionButton
 *
 * Array of card action buttons.
 */
final class QuickReplyCardActionButton extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'title',
    ];

    protected const array VALIDATION = [
        'id' => [
            'minLength' => 0,
            'maxLength' => 256,
        ],
        'title' => [
            'minLength' => 0,
            'maxLength' => 20,
        ],
    ];

    /**
     * Id of the quick reply button.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Display text of the quick reply button.
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
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
