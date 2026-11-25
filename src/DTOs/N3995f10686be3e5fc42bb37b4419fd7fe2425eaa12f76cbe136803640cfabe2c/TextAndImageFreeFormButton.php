<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * TextAndImageFreeFormButton
 *
 *  A maximum of 5 if a coupon is not provided, 4 if provided.
 *  `BUSINESS_FORM` button must be registered before using.
 *  In case of multiple buttons, if `ADD_CHANNEL` is used together with `BUSINESS_FORM`, the `ADD_CHANNEL` button must be the first button used. In all other cases, the `BUSINESS_FORM` button must be used as the first button.
 *
 */
class TextAndImageFreeFormButton extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.TextAndImageFreeFormAddChannelButton' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\TextAndImageFreeFormAddChannelButton',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.TextAndImageFreeFormAppLinkButton' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\TextAndImageFreeFormAppLinkButton',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.TextAndImageFreeFormBotKeywordButton' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\TextAndImageFreeFormBotKeywordButton',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.TextAndImageFreeFormBusinessFormButton' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\TextAndImageFreeFormBusinessFormButton',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.TextAndImageFreeFormMessageDeliveryButton' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\TextAndImageFreeFormMessageDeliveryButton',
        '3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c.TextAndImageFreeFormUrlButton' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\TextAndImageFreeFormUrlButton',
        'ADD_CHANNEL' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\TextAndImageFreeFormAddChannelButton',
        'APP_LINK' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\TextAndImageFreeFormAppLinkButton',
        'BOT_KEYWORD' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\TextAndImageFreeFormBotKeywordButton',
        'BUSINESS_FORM' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\TextAndImageFreeFormBusinessFormButton',
        'MESSAGE_DELIVERY' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\TextAndImageFreeFormMessageDeliveryButton',
        'URL' => 'InfobipSDK\\DTOs\\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\\TextAndImageFreeFormUrlButton',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\TextAndImageFreeFormButtonType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\TextAndImageFreeFormButtonType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
