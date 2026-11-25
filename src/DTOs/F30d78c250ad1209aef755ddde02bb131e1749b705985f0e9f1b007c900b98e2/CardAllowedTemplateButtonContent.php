<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * CardAllowedTemplateButtonContent
 *
 * Card buttons. Define buttons only for `quick reply` or `dynamic URL` buttons (in the required order). For static URL button, omit the buttons section.
 */
class CardAllowedTemplateButtonContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    'QUICK_REPLY' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\TemplateQuickReplyButtonContent',
    'URL' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\TemplateUrlButtonContent',
    'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.TemplateQuickReplyButtonContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\TemplateQuickReplyButtonContent',
    'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.TemplateUrlButtonContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\TemplateUrlButtonContent',
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
