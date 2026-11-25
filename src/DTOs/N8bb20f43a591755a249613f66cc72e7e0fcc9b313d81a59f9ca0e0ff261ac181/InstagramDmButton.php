<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181;

/**
 * InstagramDmButton
 */
class InstagramDmButton extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.PostbackInstagramDmButton' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\PostbackInstagramDmButton',
    '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.UrlInstagramDmButton' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\UrlInstagramDmButton',
    'POSTBACK' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\PostbackInstagramDmButton',
    'URL' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\UrlInstagramDmButton',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\InstagramDmButtonType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\InstagramDmButtonType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
