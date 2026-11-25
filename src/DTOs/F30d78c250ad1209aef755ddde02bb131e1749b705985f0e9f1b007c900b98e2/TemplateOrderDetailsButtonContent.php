<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * TemplateOrderDetailsButtonContent
 */
final class TemplateOrderDetailsButtonContent extends \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateButtonContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateOrderDetailsActionContent $action;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => $value instanceof \stdClass ? $this->action = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateOrderDetailsActionContent($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
