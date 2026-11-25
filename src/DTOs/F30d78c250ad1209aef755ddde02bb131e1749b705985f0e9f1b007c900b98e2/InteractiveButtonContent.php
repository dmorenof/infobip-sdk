<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveButtonContent
 *
 * An array of buttons sent in a message. It can have up to three buttons.
 */
class InteractiveButtonContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    'REPLY' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveReplyButtonContent',
    'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.InteractiveReplyButtonContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveReplyButtonContent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
