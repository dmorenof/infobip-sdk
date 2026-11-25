<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * RichContentFreeFormButton
 *
 * `BUSINESS_FORM` button must be registered before using.
 */
class RichContentFreeFormButton extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.RichContentFreeFormAddChannelButton' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\RichContentFreeFormAddChannelButton',
    '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.RichContentFreeFormAppLinkButton' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\RichContentFreeFormAppLinkButton',
    '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.RichContentFreeFormBotKeywordButton' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\RichContentFreeFormBotKeywordButton',
    '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.RichContentFreeFormBusinessFormButton' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\RichContentFreeFormBusinessFormButton',
    '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.RichContentFreeFormMessageDeliveryButton' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\RichContentFreeFormMessageDeliveryButton',
    '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.RichContentFreeFormUrlButton' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\RichContentFreeFormUrlButton',
    'ADD_CHANNEL' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\RichContentFreeFormAddChannelButton',
    'APP_LINK' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\RichContentFreeFormAppLinkButton',
    'BOT_KEYWORD' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\RichContentFreeFormBotKeywordButton',
    'BUSINESS_FORM' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\RichContentFreeFormBusinessFormButton',
    'MESSAGE_DELIVERY' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\RichContentFreeFormMessageDeliveryButton',
    'URL' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\RichContentFreeFormUrlButton',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\RichContentFreeFormButtonType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\RichContentFreeFormButtonType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
