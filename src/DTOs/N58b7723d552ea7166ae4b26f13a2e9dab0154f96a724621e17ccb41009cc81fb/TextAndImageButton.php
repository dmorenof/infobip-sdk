<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb;

/**
 * TextAndImageButton
 *
 *  A maximum of 5 if a coupon is not provided, 4 if provided.
 *  `BUSINESS_FORM` button must be registered before using.
 *  In case of multiple buttons, if `ADD_CHANNEL` is used together with `BUSINESS_FORM`, the `ADD_CHANNEL` button must be the first button used. In all other cases, the `BUSINESS_FORM` button must be used as the first button.
 *
 */
class TextAndImageButton extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.AddChannelTextAndImageButton' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\AddChannelTextAndImageButton',
    '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.AppLinkTextAndImageButton' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\AppLinkTextAndImageButton',
    '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.BotKeywordTextAndImageButton' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\BotKeywordTextAndImageButton',
    '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.BusinessFormTextAndImageButton' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\BusinessFormTextAndImageButton',
    '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.MessageDeliveryTextAndImageButton' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\MessageDeliveryTextAndImageButton',
    '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.UrlTextAndImageButton' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\UrlTextAndImageButton',
    'ADD_CHANNEL' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\AddChannelTextAndImageButton',
    'APP_LINK' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\AppLinkTextAndImageButton',
    'BOT_KEYWORD' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\BotKeywordTextAndImageButton',
    'BUSINESS_FORM' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\BusinessFormTextAndImageButton',
    'MESSAGE_DELIVERY' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\MessageDeliveryTextAndImageButton',
    'URL' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\UrlTextAndImageButton',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\TextAndImageButtonType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\TextAndImageButtonType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
