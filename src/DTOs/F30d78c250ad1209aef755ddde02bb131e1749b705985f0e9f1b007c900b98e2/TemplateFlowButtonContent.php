<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * TemplateFlowButtonContent
 */
final class TemplateFlowButtonContent extends \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateButtonContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'flowToken' => [
            'minLength' => 0,
            'maxLength' => 3000,
        ],
    ];

    /**
     * Message action payload data. JSON object with the data payload for the first screen.
     */
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateFlowButtonContent\DataMap $data;
    /**
     * Flow token.
     */
    public string $flowToken {
        set {
            $this->assigning('flowToken', $value);
            $this->flowToken = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'flowToken' => is_string($value) ? $this->flowToken = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
