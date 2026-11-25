<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * ButtonWithOptionalAction
 *
 * Button with optional action. Cannot be combined with `buttonTitle`.
 */
final class ButtonWithOptionalAction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'title',
    ];

    protected const array VALIDATION = [
        'action' => [
            'minLength' => 0,
            'maxLength' => 1000,
        ],
        'title' => [
            'minLength' => 1,
            'maxLength' => 30,
        ],
    ];

    /**
     * The URL users are directed to or the action performed when pressing the action button.
     */
    public string $action {
        set {
            $this->assigning('action', $value);
            $this->action = $value;
        }
    }
    /**
     * The text that will appear on the action button.
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
            'action' => is_string($value) ? $this->action = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
