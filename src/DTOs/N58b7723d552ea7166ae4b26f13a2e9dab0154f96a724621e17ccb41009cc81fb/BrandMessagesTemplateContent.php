<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb;

/**
 * BrandMessagesTemplateContent
 *
 * Template content details.
 */
class BrandMessagesTemplateContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.ImageTemplate' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\ImageTemplate',
        '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.ImageWideTemplate' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\ImageWideTemplate',
        '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.ItemListTemplate' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\ItemListTemplate',
        '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.TextTemplate' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\TextTemplate',
        'IMAGE' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\ImageTemplate',
        'IMAGE_WIDE' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\ImageWideTemplate',
        'ITEM_LIST' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\ItemListTemplate',
        'TEXT' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\TextTemplate',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\BrandMessagesTemplateTypes $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\BrandMessagesTemplateTypes::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
