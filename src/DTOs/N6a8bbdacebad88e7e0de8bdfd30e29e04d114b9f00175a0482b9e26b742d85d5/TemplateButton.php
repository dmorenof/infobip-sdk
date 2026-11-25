<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * TemplateButton
 *
 * List of template buttons.
 */
final class TemplateButton extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Button content.
     */
    public string $content;
    /**
     * Button title.
     */
    public string $title;
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
