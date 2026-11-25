<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * ButtonItem
 *
 * List of buttons.
 */
final class ButtonItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
    'title',
    'type',
];

    protected const array VALIDATION = [
    'content' => [
        'minLength' => 1,
        'maxLength' => 200,
    ],
    'title' => [
        'minLength' => 5,
        'maxLength' => 30,
    ],
];

    /**
     * Content/action associated with the button.
     */
    public string $content {
        set {
            $this->assigning('content', $value);
            $this->content = $value;
        }
    }
    /**
     * Title displayed on the button.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }
    public \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ButtonType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ButtonType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
