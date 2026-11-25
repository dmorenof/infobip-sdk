<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * UpdateFieldApiRequest
 */
final class UpdateFieldApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'isEnabled',
        'title',
    ];

    protected const array VALIDATION = [
        'title' => [
            'minLength' => 0,
            'maxLength' => 100,
        ],
    ];

    /**
     * Is field enabled.
     */
    public bool $isEnabled;
    /**
     * Available field options. Applicable only for DROPDOWN type.
     */
    public \InfobipSDK\Collections\StringCollection $options;
    /**
     * Regular expression. Applicable only for REGEX type.
     */
    public string $regex;
    /**
     * Field title.
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
            'isEnabled' => is_bool($value) ? $this->isEnabled = $value : parent::assignMember($name, $value),
            'options' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->options = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'regex' => is_string($value) ? $this->regex = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
