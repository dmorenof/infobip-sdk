<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb;

/**
 * GeneralButton
 *
 *  A maximum of 2.
 *  `BUSINESS_FORM` button must be registered before using.
 *  In case of multiple buttons, if `ADD_CHANNEL` is used together with `BUSINESS_FORM`, the `ADD_CHANNEL` button must be the last button used. In all other cases, the `BUSINESS_FORM` button must be used as the last button.
 *
 */
class GeneralButton extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.AddChannelGeneralButton' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\AddChannelGeneralButton',
    '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.AppLinkGeneralButton' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\AppLinkGeneralButton',
    '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.BotKeywordGeneralButton' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\BotKeywordGeneralButton',
    '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.BusinessFormGeneralButton' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\BusinessFormGeneralButton',
    '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.MessageDeliveryGeneralButton' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\MessageDeliveryGeneralButton',
    '58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb.UrlGeneralButton' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\UrlGeneralButton',
    'ADD_CHANNEL' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\AddChannelGeneralButton',
    'APP_LINK' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\AppLinkGeneralButton',
    'BOT_KEYWORD' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\BotKeywordGeneralButton',
    'BUSINESS_FORM' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\BusinessFormGeneralButton',
    'MESSAGE_DELIVERY' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\MessageDeliveryGeneralButton',
    'URL' => 'InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\UrlGeneralButton',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\GeneralButtonType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\GeneralButtonType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
